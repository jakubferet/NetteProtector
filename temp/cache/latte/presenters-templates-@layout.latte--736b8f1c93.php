<?php
// source: C:\xampp\htdocs\protector\protector\app\presenters/templates/@layout.latte

use Latte\Runtime as LR;

class Template736b8f1c93 extends Latte\Runtime\Template
{
	public $blocks = [
		'head' => 'blockHead',
		'scripts' => 'blockScripts',
	];

	public $blockTypes = [
		'head' => 'html',
		'scripts' => 'html',
	];


	function main()
	{
		extract($this->params);
?>
<!DOCTYPE html>
<html>
<head>
<?php
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('head', get_defined_vars());
?>
</head>

<body>  
<?php
		if ($user->isLoggedIn()) {
?>
    <nav class="navbar"> 
        <div class="navigace">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <ul class="nav">
                <li>
                    <a class="navbar-brand" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:default")) ?>">
                        <img id="home" src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 36 */ ?>/images/home.png" alt="Home button">
                    </a>
                </li>
            </ul>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
<?php
			if (in_array('administrator',$user->getRoles())) {
?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administrace<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Settings:setting")) ?>">Nastavení</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("User:list")) ?>">Uživatelé</a></li>
                            </ul>
                        </li>
<?php
			}
?>
            </ul>
            <!-- <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>-->
            <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php
			echo LR\Filters::escapeHtmlText($user->getIdentity()->name) /* line 64 */ ?> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("User:update", [$user->id])) ?>">Nastavení</a></li>
                            <li><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("User:changePassword", [$user->id])) ?>">Změnit heslo</a></li>
                            <li><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Sign:out")) ?>">Odhlásit</a></li>
                        </ul>
                    </li>  
            </ul>

          </div><!-- /.navbar-collapse -->
        </div>
    </nav>
<?php
		}
?>
    
<?php
		$iterations = 0;
		foreach ($flashes as $flash) {
			?>    <div<?php if ($_tmp = array_filter(['flash', $flash->type])) echo ' class="', LR\Filters::escapeHtmlAttr(implode(" ", array_unique($_tmp))), '"' ?>><?php
			echo LR\Filters::escapeHtmlText($flash->message) /* line 78 */ ?></div>
<?php
			$iterations++;
		}
?>
    <div class="container">
        <div class="row">
            
<?php
		$this->renderBlock('content', $this->params, 'html');
?>
            
            <footer class="text-center">
                <hr>
                <p>&copy Jakub Feret 2017</p>
            </footer>
        </div>
    </div>
<?php
		$this->renderBlock('scripts', get_defined_vars());
?>
</body>
</html>
<?php
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		if (isset($this->params['flash'])) trigger_error('Variable $flash overwritten in foreach on line 78');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockHead($_args)
	{
		extract($_args);
?>
	<meta charset="utf-8">
	<title>Protector | <?php
		if (isset($this->blockQueue["title"])) {
			$this->renderBlock('title', $this->params, function ($s, $type) {
				$_fi = new LR\FilterInfo($type);
				return LR\Filters::convertTo($_fi, 'html', $this->filters->filterContent('striphtml', $_fi, $s));
			});
		}
?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Jakub Feret">       
        <link rel="stylesheet" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 14 */ ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 15 */ ?>/css/nouislider.min.css">
        <link rel="stylesheet" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 16 */ ?>/css/style.css">
	<link rel="stylesheet" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 17 */ ?>/css/styly.css">    
<?php
	}


	function blockScripts($_args)
	{
		extract($_args);
?>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 92 */ ?>/js/bootstrap.min.js"></script>
	<script src="https://nette.github.io/resources/js/netteForms.min.js"></script>
	<script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 94 */ ?>/js/main.js"></script>
        <script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 95 */ ?>/js/nouislider.min.js"></script>
        <script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 96 */ ?>/js/wNumb.js"></script>
        
        <script>
            var sliderFormat = document.getElementById('slider');
            var inputFormat = document.getElementById('input');

            noUiSlider.create(sliderFormat, {
                    start: [20],
                    step: 1,
                    range: {
                        'min': [5],
                        'max': [60]
                    },
                    format: wNumb({
                        decimals: 0
                    })
            });
            
            sliderFormat.noUiSlider.on('update', function( values, handle ) {
                inputFormat.value = values[handle];
            });

            inputFormat.addEventListener('change', function(){
                sliderFormat.noUiSlider.set(this.value);
            });
        </script>
        <!--<script language="javascript">
            function changeImage() {
                if (document.getElementById("onOff").src.indexOf(<?php echo LR\Filters::escapeHtmlComment($basePath) /* line 124 */ ?>+"/images/on.png") >= 0) {
                    document.getElementById("onOff").src=<?php echo LR\Filters::escapeHtmlComment($basePath) /* line 125 */ ?>+"/images/off.png";
                }   
                else {
                    document.getElementById("onOff").src=<?php echo LR\Filters::escapeHtmlComment($basePath) /* line 128 */ ?>+"/images/on.png";
                }
            }
        </script>-->
<?php
	}

}
