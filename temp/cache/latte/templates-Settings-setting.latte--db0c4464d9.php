<?php
// source: C:\xampp\htdocs\protector\protector\app\presenters/templates/Settings/setting.latte

use Latte\Runtime as LR;

class Templatedb0c4464d9 extends Latte\Runtime\Template
{
	public $blocks = [
		'title' => 'blockTitle',
		'content' => 'blockContent',
	];

	public $blockTypes = [
		'title' => 'html',
		'content' => 'html',
	];


	function main()
	{
		extract($this->params);
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('title', get_defined_vars());
		$this->renderBlock('content', get_defined_vars());
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockTitle($_args)
	{
?>Nastavení
<?php
	}


	function blockContent($_args)
	{
		extract($_args);
?>
    <div class="row">
        <div class="col-md-12">
            <div class="form">
                <h3>Nastavení</h3>
<?php
		$this->createTemplate('../components/settings-form.latte', $this->params, "import")->render();
		$this->renderBlock('settings-form', ['settingsForm'] + $this->params, 'html');
?>
            </div>
        </div>
    </div>
<?php
	}

}
