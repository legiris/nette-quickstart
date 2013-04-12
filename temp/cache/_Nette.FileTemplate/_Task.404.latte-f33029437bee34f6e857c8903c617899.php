<?php //netteCache[01]000398a:2:{s:4:"time";s:21:"0.30217000 1364892924";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:76:"/var/www/test.lamp/web/nette-quickstart/sandbox/app/templates/Task/404.latte";i:2;i:1364892921;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: /var/www/test.lamp/web/nette-quickstart/sandbox/app/templates/Task/404.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'sen8evbgnq')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbe946c77524_content')) { function _lbe946c77524_content($_l, $_args) { extract($_args)
?><div id="banner">
<?php call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars())  ?>
</div>


<div id="content">
<div id="icon" class="nohover"><a href="<?php echo htmlSpecialChars($basePath) ?>
" title="Zpět na úvodní stránku"><img src="<?php echo htmlSpecialChars($basePath) ?>/images/Homepage-icon-small.jpg" alt="" /></a></div>
	
<div class="todolist">
	<h2>Page Not Found</h2>

	<p>The page you requested could not be found. It is possible that the address is
incorrect, or that the page no longer exists. Please use a search engine to find
what you are looking for.</p>		
		
</div>



	<footer>PHP <?php echo Nette\Templating\Helpers::escapeHtml(PHP_VERSION, ENT_NOQUOTES) ?> |
		<?php if (isset($_SERVER['SERVER_SOFTWARE'])): ?>Server <?php echo Nette\Templating\Helpers::escapeHtml($_SERVER['SERVER_SOFTWARE'], ENT_NOQUOTES) ;endif ?> |
		Nette Framework <?php echo Nette\Templating\Helpers::escapeHtml(Nette\Framework::VERSION, ENT_NOQUOTES) ?></footer>
</div>
<?php
}}

//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb78dd5090de_title')) { function _lb78dd5090de_title($_l, $_args) { extract($_args)
?>	<h1>Page not found</h1>
<?php
}}

//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lb3e4460d762_head')) { function _lb3e4460d762_head($_l, $_args) { extract($_args)
?><style>
html { overflow-y: scroll; }
body { font: 14px/1.65 Verdana, "Geneva CE", lucida, sans-serif; background: #3484d2; color: #333; margin: 38px auto; max-width: 1400px; min-width: 770px; }

h1, h2 { font: normal 150%/1.3 Georgia, "New York CE", utopia, serif; color: #1e5eb6; -webkit-text-stroke: 1px rgba(0,0,0,0); }

img { border: none; }

a { color: #006aeb; padding: 3px 1px; }

#banner { border-radius: 12px 12px 0 0; background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAB5CAMAAADPursXAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAGBQTFRFD1CRDkqFDTlmDkF1D06NDT1tDTNZDk2KEFWaDTZgDkiCDTtpDT5wDkZ/DTBVEFacEFOWD1KUDTRcDTFWDkV9DkR7DkN4DkByDTVeDC9TDThjDTxrDkeADkuIDTRbDC9SbsUaggAAAEdJREFUeNqkwYURgAAQA7DH3d3335LSKyxAYpf9vWCpnYbf01qcOdFVXc14w4BznNTjkQfsscAdU3b4wIh9fDVYc4zV8xZgAAYaCMI6vPgLAAAAAElFTkSuQmCC); }
#banner h1 { color: white; font-size: 50px; line-height: 121px; margin: 0; padding-left: 40px; background: url(http://files.nette.org/sandbox/logo.png) no-repeat 95%; text-shadow: 1px 1px 0 rgba(0, 0, 0, .9); }

#content { background: white; border: 1px solid #eff4f7; border-radius: 0 0 12px 12px; padding: 10px 40px; }
#content > h2 { font-size: 130%; color: #666; clear: both; padding: 1.2em 0; margin: 0; }

h2 span { color: #87A7D5; }
h2 a { text-decoration: none; background: transparent; }

.box { width: 73%; float: left; background: #f0f0f0; margin-right: 4%; min-height: 230px; padding: 3%; border: 1px solid #e6e6e6; border-radius: 5px; font-size: 12px}
.box h2 { text-align: right; margin: 0; }
.box img { float: left; }
.box p { clear: both; }
.box:nth-child(4n - 2) h2 { color: #00a6e5; }
.box:nth-child(4n - 2) img { margin: -24px 0 0 -24px; }
.box:nth-child(4n - 1) h2 a { color: #db8e34; background: transparent; }
.box:nth-child(4n) { margin: 0; }
.box:nth-child(4n) h2 a { color: #578404; background: transparent; }

body.js section { display: none; }

footer { font-size: 70%; padding: 1em 0; color: gray; }

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

<?php call_user_func(reset($_l->blocks['head']), $_l, get_defined_vars()) ; 