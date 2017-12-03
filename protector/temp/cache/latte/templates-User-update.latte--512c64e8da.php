<?php
// source: C:\xampp\htdocs\protector\protector\app\presenters/templates/User/update.latte

use Latte\Runtime as LR;

class Template512c64e8da extends Latte\Runtime\Template
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
?>Úprava uživatele
<?php
	}


	function blockContent($_args)
	{
		extract($_args);
?>
    <div class="row">   
        <div class="col-md-12">
            <div class="form">
                <h3>Úprava uživatele</h3>  
<?php
		$this->createTemplate('../components/bootstrap-form.latte', $this->params, "import")->render();
		$this->renderBlock('bootstrap-form', ['updateForm'] + $this->params, 'html');
?>
            </div>
        </div>
    </div>
<?php
	}

}
