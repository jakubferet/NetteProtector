<?php
// source: C:\xampp\htdocs\protector\protector\app\presenters/templates/Sign/in.latte

use Latte\Runtime as LR;

class Templatedd2a2e8b40 extends Latte\Runtime\Template
{
	public $blocks = [
		'content' => 'blockContent',
		'title' => 'blockTitle',
	];

	public $blockTypes = [
		'content' => 'html',
		'title' => 'html',
	];


	function main()
	{
		extract($this->params);
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('content', get_defined_vars());
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>
    <div class="row">  
        <div class="col-md-6 col-md-offset-3">
            <div class="form">
<?php
		$this->renderBlock('title', get_defined_vars());
		$this->createTemplate('../components/bootstrap-form.latte', $this->params, "import")->render();
		$this->renderBlock('bootstrap-form', ['signInForm'] + $this->params, 'html');
?>
            </div>
        </div>
    </div>
<?php
	}


	function blockTitle($_args)
	{
		extract($_args);
?>                <h3>Přihlášení</h3>
<?php
	}

}
