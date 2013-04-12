<?php //netteCache[01]000400a:2:{s:4:"time";s:21:"0.75326200 1365494993";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:78:"/var/www/test.lamp/web/nette-components/sandbox/app/components/ShowTasks.latte";i:2;i:1365494858;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: /var/www/test.lamp/web/nette-components/sandbox/app/components/ShowTasks.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'n0l7uyyyrh')
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
<tr><th>Pořadí</th><th>Projekt</th><th>Úkol</th><th>Kdo řeší</th><th>Přidáno</th><th>Převzato</th><th>Ukončeno</th><th>Čas</th></tr>
</thead>

<?php $iterations = 0; foreach ($tasks as $task): ?>
<tr><td><?php echo Nette\Templating\Helpers::escapeHtml($task->id, ENT_NOQUOTES) ?></td>
	<td><?php echo Nette\Templating\Helpers::escapeHtml($task->project->title, ENT_NOQUOTES) ?></td>
	<td><?php echo Nette\Templating\Helpers::escapeHtml($task->text, ENT_NOQUOTES) ?></td>
	<td><?php echo Nette\Templating\Helpers::escapeHtml($task->user->surname, ENT_NOQUOTES) ?></td>
	<td><?php echo Nette\Templating\Helpers::escapeHtml($template->date($task->created, 'Y-m-d, H:i:s'), ENT_NOQUOTES) ?></td>
	<td><?php echo Nette\Templating\Helpers::escapeHtml($template->date($task->assumed, 'Y-m-d, H:i:s'), ENT_NOQUOTES) ?></td>
	<td><?php echo Nette\Templating\Helpers::escapeHtml($template->date($task->done, 'Y-m-d, H:i:s'), ENT_NOQUOTES) ?></td>
	<td></td>
</tr>	 
<?php $iterations++; endforeach ?>

</table>


