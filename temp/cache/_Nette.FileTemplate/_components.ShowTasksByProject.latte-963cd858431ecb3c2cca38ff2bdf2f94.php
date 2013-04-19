<?php //netteCache[01]000404a:2:{s:4:"time";s:21:"0.84067700 1366200698";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:82:"/var/www/test.lamp/web/nette-login/sandbox/app/components/ShowTasksByProject.latte";i:2;i:1366200696;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: /var/www/test.lamp/web/nette-login/sandbox/app/components/ShowTasksByProject.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'ug2pfoxnk0')
;
// prolog Nette\Latte\Macros\UIMacros

// snippets support
if (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
?>

<table>
<thead>

	<tr><th><a href="<?php echo htmlSpecialChars($_control->link("tableSort!", array($projectID,$orderChar.'8'))) ?>
">Pořadí</a></th><th><a href="<?php echo htmlSpecialChars($_control->link("tableSort!", array($projectID,$orderChar.'1'))) ?>
">Úkol</a></th>
		<th><a href="<?php echo htmlSpecialChars($_control->link("tableSort!", array($projectID,$orderChar.'6'))) ?>
">Kdo řeší</a></th><th><a href="<?php echo htmlSpecialChars($_control->link("tableSort!", array($projectID,$orderChar.'2'))) ?>
">Přidáno</a></th>
		<th><a href="<?php echo htmlSpecialChars($_control->link("tableSort!", array($projectID,$orderChar.'3'))) ?>
">Převzato</a></th><th><a href="<?php echo htmlSpecialChars($_control->link("tableSort!", array($projectID,$orderChar.'4'))) ?>
">Ukončeno</a></th>
		<th><a href="<?php echo htmlSpecialChars($_control->link("tableSort!", array($projectID,$orderChar.'5'))) ?>
">Čas</a></th></tr>
</thead>
<?php $iterations = 0; foreach ($tasks as $task): ?>
<tr><td><?php echo Nette\Templating\Helpers::escapeHtml($task->id, ENT_NOQUOTES) ?></td>
	<td><?php echo Nette\Templating\Helpers::escapeHtml($task->text, ENT_NOQUOTES) ?></td>
	<td><?php echo Nette\Templating\Helpers::escapeHtml($task->user->lastname, ENT_NOQUOTES) ?></td>
	<td><?php echo Nette\Templating\Helpers::escapeHtml($template->date($task->created, 'Y-m-d, H:i:s'), ENT_NOQUOTES) ?></td>
	<td><?php echo Nette\Templating\Helpers::escapeHtml($template->date($task->assumed, 'Y-m-d, H:i:s'), ENT_NOQUOTES) ?></td>
	<td><?php echo Nette\Templating\Helpers::escapeHtml($template->date($task->done, 'Y-m-d, H:i:s'), ENT_NOQUOTES) ;if (!$task->done): ?>
<a class="icon tick" href="<?php echo htmlSpecialChars($_control->link("markDone!", array($task->id))) ?>
">Ukončit</a><?php endif ?>
</td>
	<td>&nbsp;</td>
</tr>	
<?php $iterations++; endforeach ?>


</table>