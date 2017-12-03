<?php
// source: C:\xampp\htdocs\protector\protector\app\presenters/templates/User/list.latte

use Latte\Runtime as LR;

class Template12aceefd4b extends Latte\Runtime\Template
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
?>

<?php
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		if (isset($this->params['row'])) trigger_error('Variable $row overwritten in foreach on line 19');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockTitle($_args)
	{
?>Uživatelé
<?php
	}


	function blockContent($_args)
	{
		extract($_args);
?>
    <div class="row"> 
    <h2>Seznam uživatelů</h2>              
        <div class="col-xs-12">
            <table class="table table-striped table-bordered table-responsive" id="list">
                <thead>
                    <tr class="titul">
                        <th>Uživatelské jméno</th>
                        <th>Uživatel</th>
                        <th>Role</th>
                        <th>Akce</th>
                    </tr>    
                </thead>    
                <tbody>
<?php
		$iterations = 0;
		foreach ($data as $row) {
?>
                        <tr>
                            <th><?php echo LR\Filters::escapeHtmlText($row->username) /* line 21 */ ?></th>
                            <td><?php echo LR\Filters::escapeHtmlText($row->name) /* line 22 */ ?></td>
                            <td><?php echo LR\Filters::escapeHtmlText($row->role) /* line 23 */ ?></td>
                            <td><a class="btn btn-warning" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("User:update", [$row->id])) ?>">Upravit</a>
                                <a class="btn btn-danger" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("User:delete", [$row->id])) ?>">Smazat</a></td>
                        </tr>    
<?php
			$iterations++;
		}
?>
                </tbody>    
            </table>
            <p><a class="btn btn-primary" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("User:create")) ?>">Nový</a></td></p>
        </div>
    </div>                  
<?php
	}

}
