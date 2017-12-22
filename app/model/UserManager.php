<?php

namespace App\Model;

use Nette;
use Nette\Security\Passwords;


/**
 * Users management.
 */
class UserManager implements Nette\Security\IAuthenticator
{
	use Nette\SmartObject;

	const
		TABLE_NAME = 'users',
		COLUMN_ID = 'id',
		COLUMN_USERNAME = 'username',
                COLUMN_NAME = 'name',
		COLUMN_PASSWORD = 'password',
		COLUMN_ROLE = 'role';


	/** @var Nette\Database\Context */
	private $database;


	public function __construct(Nette\Database\Context $database) {
		$this->database = $database;
	}

	/**
	 * Performs an authentication.
	 * @return Nette\Security\Identity
	 * @throws Nette\Security\AuthenticationException
	 */
	public function authenticate(array $credentials) {
		list($username, $password) = $credentials;

		$row = $this->database->table(self::TABLE_NAME)->where(self::COLUMN_USERNAME, $username)->fetch();

		if (!$row) {
                    throw new Nette\Security\AuthenticationException('Zadané uživatelské jméno není správné.', self::IDENTITY_NOT_FOUND);

		} elseif (!Passwords::verify($password, $row[self::COLUMN_PASSWORD])) {
                    throw new Nette\Security\AuthenticationException('Zadané heslo není správné.', self::INVALID_CREDENTIAL);

		} elseif (Passwords::needsRehash($row[self::COLUMN_PASSWORD])) {
                    $row->update([
                        self::COLUMN_PASSWORD => Passwords::hash($password),
                    ]);
		}

		$arr = $row->toArray();
		unset($arr[self::COLUMN_PASSWORD]);
		return new Nette\Security\Identity($row[self::COLUMN_ID], $row[self::COLUMN_ROLE], $arr);
	}

	/**
	 * Adds new user.
	 * @param  string
	 * @param  string
	 * @param  string
	 * @return void
	 * @throws DuplicateNameException
	 */
	public function add($username, $name, $password, $role) {
		try {
                    $this->database->table(self::TABLE_NAME)->insert([
                        self::COLUMN_USERNAME => $username,                      
                        self::COLUMN_PASSWORD => Passwords::hash($password),
                        self::COLUMN_NAME => $name,
                        self::COLUMN_ROLE => $role,
                    ]);
		} catch (Nette\Database\UniqueConstraintViolationException $e) {
                    throw new DuplicateNameException;
		}
	}

        public function getAll() {
            return $this->database->table(self::TABLE_NAME)->fetchAll();
	} 
        
        public function getById($id) {
            return $this->database->table(self::TABLE_NAME)->where('id = ?', $id)->fetch();
	} 
        
        public function create($values) {
            $this->database->table(self::TABLE_NAME)->insert($values);
        }
        
        public function update($id, $values) {
            $this->database->table(self::TABLE_NAME)->where(self::COLUMN_ID, $id)->update($values);
        }
        
        public function changePassword($id, $password) {
            $this->database->table(self::TABLE_NAME)->where(self::COLUMN_ID, $id)->update([
                self::COLUMN_PASSWORD => Passwords::hash($password),
            ]);
	}
        
        public function delete($id) {
            $this->database->table(self::TABLE_NAME)->where(self::COLUMN_ID, $id)->delete();
        }
}



class DuplicateNameException extends \Exception
{}
