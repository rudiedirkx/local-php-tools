<?php

$files = glob(__DIR__ . '/*.php');
$files = array_map(basename(...), $files);
$files = array_filter($files, function(string $file) {
	return $file != basename(__FILE__) && !str_starts_with($file, 'inc.') && !str_starts_with($file, 'tpl.');
});

?>
<title>Tools</title>

<ul>
	<? foreach ($files as $file): ?>
		<li><a href="<?= $file ?>"><?= $file ?></a></li>
	<? endforeach ?>
</ul>
