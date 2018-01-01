<?php

namespace App\Model;

use Nette;


/**
 * Users management.
 */
class SettingsManager
{
    use Nette\SmartObject;

    const
        TABLE_NAME = 'settings',
        COLUMN_ID = 'id',
        COLUMN_ACTIVATE = 'activate',
        COLUMN_PASSWORD = 'password',
        COLUMN_COUNTDOWN = 'countdown',
        COLUMN_WARNING = 'warning',
        COLUMN_ALARM = 'alarm';


    /** @var Nette\Database\Context */
    private $database;


    public function __construct(Nette\Database\Context $database) {
        $this->database = $database;
    }

    public function getAll(){
        return $this->database->table(self::TABLE_NAME)->fetchAll();
    }

    public function getById($id){
        return $this->database->table(self::TABLE_NAME)->where('id = ?', $id)->fetch();
    }  

    public function getSetting($setting){
        return $this->database->table(self::TABLE_NAME)->get($setting);
    }

    public function activate($value){
        $this->database->table(self::TABLE_NAME)->update([
            self::COLUMN_ACTIVATE => $value,
        ]);
    }

    public function alarm($value){
        $this->database->table(self::TABLE_NAME)->update([
            self::COLUMN_ALARM => $value,
        ]);
    }

    public function update($values) {
        $this->database->table(self::TABLE_NAME)->update($values);
    } 
    
}
