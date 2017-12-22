<?php

namespace App\Presenters;
use Nette;
use App\Model;
use App\Model\SettingsManager;


class HomepagePresenter extends BasePresenter
{
    protected function startup() {
        parent::startup();
        if (!$this->user->isLoggedIn()){
            $this->redirect("Sign:in");
        }
    } 
    
    private $settingsManager;
        
    function __construct(SettingsManager $settingsManager) {
        $this->settingsManager = $settingsManager;
    } 
    
    public function renderDefault(){
        $this->template->data = $this->settingsManager->getSetting(1);  
    }
    
    public function actionActivate($activate){
        $data = $this->settingsManager->getSetting(1);
        if ($data->activate == 'true'){
            $this->settingsManager->activate('false');
            $this->flashMessage("Alarm byl deaktivován!");           
        }    
        else {
            $this->settingsManager->activate('true');
            $this->flashMessage("Alarm byl aktivován!");
        }
        $this->redirect("Homepage:default");
    } 
}