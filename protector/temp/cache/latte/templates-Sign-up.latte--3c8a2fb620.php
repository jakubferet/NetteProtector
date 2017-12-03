<?php
// source: C:\xampp\htdocs\protector\protector\app\presenters/templates/Sign/up.latte

use Latte\Runtime as LR;

class Template3c8a2fb620 extends Latte\Runtime\Template
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
<?php
		$this->renderBlock('title', get_defined_vars());
?>
        <div class="col-md-10">
<?php
		$this->createTemplate('../components/bootstrap-form.latte', $this->params, "import")->render();
		$this->renderBlock('bootstrap-form', ['signUpForm'] + $this->params, 'html');
?>

            <p><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("in")) ?>">Máte už svůj účet? Přihlaste se.</a></p>
        </div>
    </div>
<?php
	}


	function blockTitle($_args)
	{
		extract($_args);
?>        <h2>Registrace</h2>
<?php
	}

}
