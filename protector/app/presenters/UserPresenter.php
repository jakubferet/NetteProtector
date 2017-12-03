<?php

namespace App\Presenters;

use Nette;

use App\Model\UserManager;
use Nette\Application\BadRequestException;
use Nette\Application\ForbiddenRequestException;

use Tracy\Debugger;

use Nette\Application\UI;

class UserPresenter extends UI\Presenter {

    private $userManager;

    const PASSWORD_MIN_LENGTH = 7;
    
    function __construct(UserManager $userManager) {
        $this->userManager = $userManager;
    }   
    
    protected function startup(){
        parent::startup();
        if (!$this->user->isLoggedIn()){
            $this->redirect("Sign:in");
        }
    } 
    
    /*protected function startup() {
        parent::startup();
        if (!$this->getUser()->isAllowed('User', 'list')) {
            throw new ForbiddenRequestException();
        }
    }*/

    public function renderList(){
        if (!$this->getUser()->isAllowed('User', 'list'))
            throw new ForbiddenRequestException();
        $this->template->data = $this->userManager->getAll();
    }
    
    public function renderCreate(){
        if (!$this->getUser()->isAllowed('User', 'create'))
            throw new ForbiddenRequestException();
        $data = array();
        $this['createForm']->setDefaults($data);          
    }
    
    public function renderUpdate($id){
        if (!$this->getUser()->isAllowed('User', 'update'))
            throw new ForbiddenRequestException();
        elseif (!$data = $this->userManager->getById($id)) 
            throw new BadRequestException();        
        $this['updateForm']->setDefaults($data);           
    }
    
    public function renderChangePassword($id) {
        if (!$this->getUser()->isAllowed('User', 'changePassword'))
            throw new ForbiddenRequestException();
        elseif (!$data = $this->userManager->getById($id)) 
            throw new BadRequestException();        
        $this['changePasswordForm']->setDefaults($data);           
    }
    
    protected function createComponentCreateForm(){
        $role = [
            'registered'=>'registered',
            'administrator'=>'administrator',           
        ];
        $form = new UI\Form;
	$form->addText('username', 'Uživatelské jméno:')
            ->setRequired('Zadejte, prosím, uživatelské jméno.');
	$form->addText('name', 'Jméno:');
        $form->addPassword('password', 'Heslo:')
		->setOption('description', sprintf('minimálně %d znaků', self::PASSWORD_MIN_LENGTH))
                ->addRule($form::MIN_LENGTH, NULL, self::PASSWORD_MIN_LENGTH)
                ->setRequired('Vytvořte, prosím, heslo.');
        $form->addPassword('confirmPassword', 'Potvrzení hesla:')
                ->addRule($form::EQUAL, 'Zadaná hesla se musejí shodovat.', $form['password'])
                ->setRequired('Zadejte, prosím, ještě jednou heslo.');
        $form->addSelect('role', 'Role:', $role);
        $form->addSubmit('submit', 'Odeslat')
                ->setAttribute('class','btn btn-default');
        $form->onSuccess[] = [$this, 'createFormSucceeded'];
        return $form;
    }

    // volá se po úspěšném odeslání formuláře
    public function createFormSucceeded(UI\Form $form, $values){
        $this->userManager->add($values->username, $values->name, $values->password, $values->role);
        $this->flashMessage("Uživatel byl vytvořen.");
        $this->redirect('User:list');
    }
    
    protected function createComponentUpdateForm($values){
        $role = [
            'registered'=>'registered',
            'administrator'=>'administrator',           
        ];
        $form = new UI\Form;
	$form->addText('username', 'Uživatelské jméno:')
            ->setRequired('Zadejte, prosím, uživatelské jméno.');
	$form->addText('name', 'Jméno:');
        if (in_array('administrator',$this->getUser()->getRoles()))
            $form->addSelect('role', 'Role:', $role);
        $form->addSubmit('submit', 'Odeslat')
                ->setAttribute('class','btn btn-default');
        $form->onSuccess[] = [$this, 'updateFormSucceeded'];
        return $form;
    }

    // volá se po úspěšném odeslání formuláře
    public function updateFormSucceeded(UI\Form $form, $values){
            $id = $this->getParameter("id");
            $this->userManager->update($id, $values);
            $this->flashMessage("Údaje byly aktualizovány."); 
            if (in_array('administrator',$this->getUser()->getRoles()))
                $this->redirect('User:list');
            $this->redirect('Homepage:');
    }
    
    protected function createComponentChangePasswordForm(){
        $form = new UI\Form;
	$form->addPassword('oldPassword', 'Stávající heslo:')
                ->setRequired('Zadejte, prosím, Vaše stávající heslo.');
        $form->addPassword('newPassword', 'Nové heslo:')
                ->setRequired('Zadejte, prosím, nové heslo.');
        $form->addPassword('confirmPassword', 'Potvrzení hesla:')
                ->addRule($form::EQUAL, 'Zadaná hesla se musejí shodovat.', $form['newPassword'])
                ->setRequired('Zadejte, prosím, ještě jednou nové heslo.');
        $form->addSubmit('submit', 'Odeslat')
                ->setAttribute('class','btn btn-default');
        $form->onSuccess[] = [$this, 'changePasswordFormSucceeded'];
        return $form;
    }

    // volá se po úspěšném odeslání formuláře
    public function changePasswordFormSucceeded(UI\Form $form){
        $values = $form->getValues();
	$user = $this->getUser();
        try {
            $this->userManager->authenticate(array(
                $user->getIdentity()->username,
		$values->oldPassword
            ));
            $this->userManager->changePassword($user->getId(), $values->newPassword);
            $this->flashMessage("Heslo bylo změněno."); 
            if (in_array('administrator',$user->getRoles()))
                $this->redirect('User:list');
            $this->redirect('Homepage:');
        } catch (Nette\Security\AuthenticationException $e) {
            $form->addError('Zadané heslo není správné.');
	}      
    }
    
    public function actionDelete($id){
        $this->userManager->delete($id);
        $this->flashMessage("Uživatel byl vymazán.");
        $this->redirect("User:list");       
    }
}
