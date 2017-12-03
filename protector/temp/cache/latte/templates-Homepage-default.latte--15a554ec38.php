<?php
// source: C:\xampp\htdocs\protector\protector\app\presenters/templates/Homepage/default.latte

use Latte\Runtime as LR;

class Template15a554ec38 extends Latte\Runtime\Template
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
?>

<?php
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
?>Úvodní stránka
<?php
	}


	function blockContent($_args)
	{
		extract($_args);
		?>    <a id="onOffButton" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:activate")) ?>">
<?php
		if ($data->activate == 'false') {
			?>            <img class="onOff" class="img-responsive" src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 8 */ ?>/images/on.png" alt="On button">      
<?php
		}
		else {
			?>            <img class="onOff" class="img-responsive" src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 10 */ ?>/images/off.png" alt="Off button">
<?php
		}
?>
    </a>
<?php
	}

}
