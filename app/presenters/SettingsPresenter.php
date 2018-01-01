<?php

namespace App\Presenters;

use Nette;
use App\Model;
use App\Model\SettingsManager;
use Nette\Application\BadRequestException;
use Nette\Application\ForbiddenRequestException;
use Nette\Application\UI;

class SettingsPresenter extends UI\Presenter
{
    protected function startup(){
        parent::startup();
        if (!$this->user->isLoggedIn()){
            $this->redirect("Sign:in");
        }
    } 

    private $settingsManager;
        
    function __construct(SettingsManager $settingsManager){
        $this->settingsManager = $settingsManager;
    }  
    
    public function renderSetting(){
        if (!$this->getUser()->isAllowed('Settings', 'setting'))
            throw new ForbiddenRequestException();
        elseif (!$data = $this->settingsManager->getSetting(1)) 
            throw new BadRequestException();
        $this['settingsForm']->setDefaults($data); 
    }

    protected function createComponentSettingsForm($values){
        $form = new UI\Form;
	$form->addInteger('countdown', 'Vteřin do aktivace:')
                ->addRule($form::RANGE, 'Zadejte interval od %d do %d', array(5, 60));
	$form->addInteger('warning', 'Vteřin do spuštění:')
                ->addRule($form::RANGE, 'Zadejte interval od %d do %d', array(5, 60));
        $form->addSubmit('submit', 'Odeslat')
                ->setAttribute('class','btn btn-default');
        $form->onSuccess[] = [$this, 'settingsFormSucceeded'];
        return $form;
    }

    // volá se po úspěšném odeslání formuláře
    public function settingsFormSucceeded(UI\Form $form, $values){
        $this->settingsManager->update($values);
        $this->flashMessage("Údaje byly aktualizovány."); 
        $this->redirect('Settings:setting');
    }         
}

    
   