<?php

namespace App\Forms;

use Nette;
use Nette\Application\UI\Form;
use Nette\Security\User;


class SignInFormFactory
{
	use Nette\SmartObject;

	/** @var FormFactory */
	private $factory;

	/** @var User */
	private $user;


	public function __construct(FormFactory $factory, User $user)
	{
		$this->factory = $factory;
		$this->user = $user;
	}


	/**
	 * @return Form
	 */
	public function create(callable $onSuccess)
	{
		$form = $this->factory->create();
		$form->addText('username', 'Jméno:')
			->setRequired('Vložte, prosím, své uživatelské jméno.');

		$form->addPassword('password', 'Heslo:')
			->setRequired('Zadejte, prosím, své heslo.');

		$form->addSubmit('send', 'Přihlásit se')
                        ->setAttribute('class','btn btn-default');

		$form->onSuccess[] = function (Form $form, $values) use ($onSuccess) {
			try {
                            $this->user->setExpiration('10 minutes', TRUE);   
                            $this->user->login($values->username, $values->password);
			} catch (Nette\Security\AuthenticationException $e) {
                            $form->addError('Zadané údaje nejsou správné.');
                            return;
			}
			$onSuccess();
		};

		return $form;
	}

}
