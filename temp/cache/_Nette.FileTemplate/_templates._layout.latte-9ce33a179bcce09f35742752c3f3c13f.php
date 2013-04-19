<?php //netteCache[01]000392a:2:{s:4:"time";s:21:"0.53034500 1366373136";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:70:"/var/www/test.lamp/web/nette-login/sandbox/app/templates/@layout.latte";i:2;i:1366373048;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: /var/www/test.lamp/web/nette-login/sandbox/app/templates/@layout.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'ge29exg2jx')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lbec8dab7591_title')) { function _lbec8dab7591_title($_l, $_args) { extract($_args)
?>Úvodní stránka<?php
}}

//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lb35d8bdf723_head')) { function _lb35d8bdf723_head($_l, $_args) { extract($_args)
;
}}

//
// block scripts
//
if (!function_exists($_l->blocks['scripts'][] = '_lb2e94fe219a_scripts')) { function _lb2e94fe219a_scripts($_l, $_args) { extract($_args)
?>	<script src="<?php echo htmlSpecialChars($basePath) ?>/js/jquery.js"></script>
	<script src="<?php echo htmlSpecialChars($basePath) ?>/js/netteForms.js"></script>
	<script src="<?php echo htmlSpecialChars($basePath) ?>/js/main.js"></script>
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
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="description" content="" />
<?php if (isset($robots)): ?>	<meta name="robots" content="<?php echo htmlSpecialChars($robots) ?>" />
<?php endif ?>

	<title><?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
ob_start(); call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars()); echo $template->strip($template->striptags(ob_get_clean()))  ?></title>

	<!--<link rel="stylesheet" media="screen,projection,tv" href="<?php echo Nette\Templating\Helpers::escapeHtmlComment($basePath) ?>/css/screen.css">-->
	<!--<link rel="stylesheet" media="print" href="<?php echo Nette\Templating\Helpers::escapeHtmlComment($basePath) ?>/css/print.css">-->
	<link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/todo.css" type="text/css" />
	<link rel="shortcut icon" href="<?php echo htmlSpecialChars($basePath) ?>/favicon.ico" />
	<?php call_user_func(reset($_l->blocks['head']), $_l, get_defined_vars())  ?>

</head>

<body>

	<script> document.body.className+=' js' </script>

<?php $iterations = 0; foreach ($flashes as $flash): ?>	<div class="flash <?php echo htmlSpecialChars($flash->type) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($flash->message, ENT_NOQUOTES) ?></div>
<?php $iterations++; endforeach ?>

	<div id="sidebar">
		
<?php if (!$user->isLoggedIn()): ?>
			<div class="form-login">
<?php Nette\Latte\Macros\FormMacros::renderFormBegin($form = $_form = (is_object("loginForm") ? "loginForm" : $_control["loginForm"]), array()) ;if (is_object($form)) $_ctrl = $form; else $_ctrl = $_control->getComponent($form); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render('errors') ?>
			<table>
			<tr><td><?php $_input = is_object("username") ? "username" : $_form["username"]; if ($_label = $_input->getLabel()) echo $_label->addAttributes(array()) ?>
</td><td colspan="2"><?php $_input = (is_object("username") ? "username" : $_form["username"]); echo $_input->getControl()->addAttributes(array()) ?></td></tr>
			<tr><td><?php $_input = is_object("password") ? "password" : $_form["password"]; if ($_label = $_input->getLabel()) echo $_label->addAttributes(array()) ?>
</td><td><?php $_input = (is_object("password") ? "password" : $_form["password"]); echo $_input->getControl()->addAttributes(array()) ?>
</td><td><?php $_input = (is_object("login") ? "login" : $_form["login"]); echo $_input->getControl()->addAttributes(array()) ?></td></tr>
			</table>
<?php Nette\Latte\Macros\FormMacros::renderFormEnd($_form) ;else: ?>
			<div class="form-login">
			<p>Přihlášený uživatel<br />
			   <strong>kobra</strong><br />
			   <a href="" title="Nastavení účtu">nastavení</a>&nbsp;&nbsp;&nbsp;&nbsp;<a title="Odhlásit se" href="<?php echo htmlSpecialChars($_control->link("logout!")) ?>
">odhlášení</a></p>	
<?php endif ?>
		</div>
		
		<h2>Projekty</h2>
		<ul>
<?php $iterations = 0; foreach ($projects as $project): ?>
				<li><a href="<?php echo htmlSpecialChars($_control->link("Task:", array('id' => $project->id))) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($project->title, ENT_NOQUOTES) ?></a></li>
<?php $iterations++; endforeach ?>
		</ul>
		
		<p><a href="http://www.seznam.cz" target = "_blank" onclick="window.open('http://www.seznam.cz', 'popup', 'width=400,height=600'); return false" title="">Přidat nový projekt</a></p>
		<hr />
		<p><a href="<?php echo htmlSpecialChars($basePath) ?>/registrace-noveho-uzivatele/">Registrace</a></p>
	</div>	<!-- /sidebar -->	

	
<?php Nette\Latte\Macros\UIMacros::callBlock($_l, 'content', $template->getParameters()) ?>

<?php call_user_func(reset($_l->blocks['scripts']), $_l, get_defined_vars())  ?>
</body>
</html>
