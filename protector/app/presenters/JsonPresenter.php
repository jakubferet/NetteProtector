<?php
namespace App\Presenters;
use Nette;
use App\Model;
use App\Model\SettingsManager;
use Drahak\Restful\IResource;
use Drahak\Restful\Application\UI\ResourcePresenter;

class JsonPresenter extends ResourcePresenter
{
    private $settingsManager;
    
    protected $typeMap = array(
       'json' => IResource::JSON,
       'xml' => IResource::XML
    );
        
    function __construct(SettingsManager $settingsManager){
        $this->settingsManager = $settingsManager;
    } 
    
    public function actionJson($type = 'json'){    
        $this->resource->settings = $this->settingsManager->getSetting(1);
        $this->sendResource($this->typeMap[$type]);
    }

}

