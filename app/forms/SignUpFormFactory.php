<?php

namespace App\Forms;

use Nette;
use Nette\Application\UI\Form;
use App\Model;


class SignUpFormFactory
{
    use Nette\SmartObject;

    const PASSWORD_MIN_LENGTH = 7;

    /** @var FormFactory */
    private $factory;

    /** @var Model\UserManager */
    private $userManager;


    public function __construct(FormFactory $factory, Model\UserManager $userManager)
    {
        $this->factory = $factory;
        $this->userManager = $userManager;
    }


    /**
     * @return Form
     */
    public function create(callable $onSuccess)
    {
        $form = $this->factory->create();
        $form->addText('username', 'Uživatelské jméno:')
                ->setRequired('Zadejte, prosím, uživatelské jméno.');

        $form->addText('name', 'Jméno:')
                ->setRequired('Zadejte, prosím, vaše jméno.');

        $form->addPassword('password', 'Heslo:')
                ->setOption('description', sprintf('minimálně %d znaků', self::PASSWORD_MIN_LENGTH))
                ->setRequired('Vytvořte, prosím, heslo.')
                ->addRule($form::MIN_LENGTH, NULL, self::PASSWORD_MIN_LENGTH);

        $form->addPassword('confirmPassword', 'Potvrzení hesla:')
                ->addRule($form::FILLED, 'Nové heslo je nutné zadat ještě jednou pro potvrzení.')
                ->addRule($form::EQUAL, 'Zadaná hesla se musejí shodovat.', $form['password']);

        $form->addSubmit('send', 'Zaregistrovat se')
                ->setAttribute('class','btn btn-default');;

        $form->onSuccess[] = function (Form $form, $values) use ($onSuccess) {
            try {
                $this->userManager->add($values->username, $values->name, $values->password);
            } catch (Model\DuplicateNameException $e) {
                $form['username']->addError('Uživatelské jméno je už používáno.');
                return;
            }
            $onSuccess();
        };

        return $form;
    }

}
