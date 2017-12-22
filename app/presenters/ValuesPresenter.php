<?php
namespace App\Presenters;
use Nette;
use App\Model;
use App\Model\SettingsManager;
use Nette\Application\Responses\JsonResponse;
use Drahak\Restful\IResource;
use Drahak\Restful\Application\UI\ResourcePresenter;
use Drahak\Restful\Security\Process\SecuredAuthentication;
use Nette\Mail\Message;
use Nette\Mail\SendmailMailer;
use Tracy\Debugger;

class ValuesPresenter extends ResourcePresenter
{
    private $settingsManager;
        
    function __construct(SettingsManager $settingsManager){
        $this->settingsManager = $settingsManager; 
    } 
      
    public function actionValues(){
        $mail = new Message;
        $mailer = new SendmailMailer;
	    $json = $this->getHttpRequest()->getRawBody();
        $value = json_decode($json);
        $active = $value->{'activate'};
        $alarmed = $value->{'alarm'};
        $this->settingsManager->activate($active);
        $this->settingsManager->alarm($alarmed);
        $data = $this->settingsManager->getSetting(1);
        if ($data->alarm == 'true'){
            $mail->setFrom('protector.safety@seznam.cz')
                    ->addTo('739187900@sms.t-mobile.cz')
                    ->setSubject('Narušení bezpečnosti')
                    ->setBody("Došlo ke spuštění bezpečnostního systému! Možné narušení bezpečnosti!");       
            $mailer->send($mail);
        }
    }
}

