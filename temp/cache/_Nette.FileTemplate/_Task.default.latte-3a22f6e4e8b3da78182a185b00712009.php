<?php //netteCache[01]000397a:2:{s:4:"time";s:21:"0.67358900 1366107067";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:75:"/var/www/test.lamp/web/nette-login/sandbox/app/templates/Task/default.latte";i:2;i:1366107053;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: /var/www/test.lamp/web/nette-login/sandbox/app/templates/Task/default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'juhfmqhwk0')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb3974e7bb3d_content')) { function _lb3974e7bb3d_content($_l, $_args) { extract($_args)
?><div id="banner">
	<h1>Task manager &#8211; login</h1>
</div>


<div id="content">
<div id="icon" class="nohover"><a href="<?php echo htmlSpecialChars($basePath) ?>
" title="Zpět na úvodní stránku"><img src="<?php echo htmlSpecialChars($basePath) ?>/images/Homepage-icon-small.jpg" alt="" /></a></div>
	
<div class="todolist">

<!-- formular do tabulky 
<fieldset>	
<legend></legend>
	</fieldset>	-->

<?php Nette\Latte\Macros\FormMacros::renderFormBegin($form = $_form = (is_object("taskForm") ? "taskForm" : $_control["taskForm"]), array()) ?>
<div class="task-form">
<?php if (is_object($form)) $_ctrl = $form; else $_ctrl = $_control->getComponent($form); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render('errors') ?>

	<?php $_input = is_object("text") ? "text" : $_form["text"]; if ($_label = $_input->getLabel()) echo $_label->addAttributes(array()) ?>
 <?php $_input = (is_object("text") ? "text" : $_form["text"]); echo $_input->getControl()->addAttributes(array('size' => 40, 'autofocus' => true)) ?>
 <?php $_input = is_object("users") ? "users" : $_form["users"]; if ($_label = $_input->getLabel()) echo $_label->addAttributes(array()) ?>
 <?php $_input = (is_object("users") ? "users" : $_form["users"]); echo $_input->getControl()->addAttributes(array()) ?>
 <?php $_input = (is_object("create") ? "create" : $_form["create"]); echo $_input->getControl()->addAttributes(array()) ?>


<?php Nette\Latte\Macros\FormMacros::renderFormEnd($_form) ?>

<?php call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars())  ?>

	<div class="box">
		<h2><img src="http://files.nette.org/sandbox/database.png" alt="" />Co je potřeba udělat...</h2>

<?php $_ctrl = $_control->getComponent("showTasks"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render() ?>

	</div>
</div>


	<!--<footer>PHP <?php echo Nette\Templating\Helpers::escapeHtmlComment(PHP_VERSION) ?> |
		<?php if (isset($_SERVER['SERVER_SOFTWARE'])): ?>Server <?php echo Nette\Templating\Helpers::escapeHtmlComment($_SERVER['SERVER_SOFTWARE']) ;endif ?> |
		Nette Framework <?php echo Nette\Templating\Helpers::escapeHtmlComment(Nette\Framework::VERSION) ?></footer>
		
		<td></td>
		
		-->
		
</div>
<?php
}}

//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb1c115834ec_title')) { function _lb1c115834ec_title($_l, $_args) { extract($_args)
?>	<h2><?php echo Nette\Templating\Helpers::escapeHtml($project->title, ENT_NOQUOTES) ?></h2>
<?php
}}

//
// block scripts
//
if (!function_exists($_l->blocks['scripts'][] = '_lb29eeff7917_scripts')) { function _lb29eeff7917_scripts($_l, $_args) { extract($_args)
;Nette\Latte\Macros\UIMacros::callBlockParent($_l, 'scripts', get_defined_vars()) ?>
<script src="http://jush.sourceforge.net/jush.js"></script>
<script>
	jush.create_links = false;
	jush.highlight_tag('code');
	$('code.jush').each(function(){ $(this).html($(this).html().replace(/\x7B[/$\w].*?\}/g, '<span class="jush-latte">$&</span>')) });

	$('a[href^=#]').click(function(){
		$('html,body').animate({ scrollTop: $($(this).attr('href')).show().offset().top - 5 }, 'fast');
		return false;
	});
</script>
<?php
}}

//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lb2ef95c0608_head')) { function _lb2ef95c0608_head($_l, $_args) { extract($_args)
?><style>
html { overflow-y: scroll; }
body { font: 14px/1.65 Verdana, "Geneva CE", lucida, sans-serif; background: #3484d2; color: #333; margin: 38px auto; max-width: 1400px; min-width: 770px; }

h1, h2 { font: normal 150%/1.3 Georgia, "New York CE", utopia, serif; color: #1e5eb6; -webkit-text-stroke: 1px rgba(0,0,0,0); }

img { border: none; }

a { color: #006aeb; padding: 3px 1px; }

#banner { border-radius: 12px 12px 0 0; background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAB5CAMAAADPursXAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAGBQTFRFD1CRDkqFDTlmDkF1D06NDT1tDTNZDk2KEFWaDTZgDkiCDTtpDT5wDkZ/DTBVEFacEFOWD1KUDTRcDTFWDkV9DkR7DkN4DkByDTVeDC9TDThjDTxrDkeADkuIDTRbDC9SbsUaggAAAEdJREFUeNqkwYURgAAQA7DH3d3335LSKyxAYpf9vWCpnYbf01qcOdFVXc14w4BznNTjkQfsscAdU3b4wIh9fDVYc4zV8xZgAAYaCMI6vPgLAAAAAElFTkSuQmCC); }
#banner h1 { color: white; font-size: 50px; line-height: 121px; margin: 0; padding-left: 40px; background: url(http://files.nette.org/sandbox/logo.png) no-repeat 95%; text-shadow: 1px 1px 0 rgba(0, 0, 0, .9); }

#content { background: white; border: 1px solid #eff4f7; border-radius: 0 0 12px 12px; padding: 10px 40px; min-height:700px}
#content > h2 { font-size: 130%; color: #666; clear: both; padding: 1.2em 0; margin: 0; }

h2 span { color: #87A7D5; }
h2 a { text-decoration: none; background: transparent; }

.box { width: 75%; float: left; background: #f0f0f0; margin-right: 4%; min-height: 230px; padding: 3%; border: 1px solid #e6e6e6; border-radius: 5px; font-size: 11px}
.box h2 { text-align: right; margin: 0; }
.box img { float: left; }
.box p { clear: both; }
.box:nth-child(4n - 2) h2 { color: #00a6e5; }
.box:nth-child(4n - 2) img { margin: -24px 0 0 -24px; }
.box:nth-child(4n - 1) h2 a { color: #db8e34; background: transparent; }
.box:nth-child(4n) { margin: 0; }
.box:nth-child(4n) h2 a { color: #578404; background: transparent; }

body.js section { display: none; }

footer { font-size: 70%; padding: 1em 0; color: gray; margin-top: 130px }

</style>
<?php
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
?>

<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars())  ?>

<?php call_user_func(reset($_l->blocks['scripts']), $_l, get_defined_vars())  ?>


<?php call_user_func(reset($_l->blocks['head']), $_l, get_defined_vars()) ; 