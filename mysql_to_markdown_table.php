<?php

if (isset($_POST['mysql'])) {
	header('Content-type: text/plain; charset=utf-8');
	$table = trim($_POST['mysql']);
	$table = trim(trim($table, '-+'));
	$table = preg_replace_callback('#\+[\-\+]{5,}\+#', function($m) {
		return str_replace('+', '|', $m[0]);
	}, $table);
	echo $table;
	exit;
}

require 'tpl.header.php';

?>
<form action method="post">
	<p><textarea name="mysql" placeholder="MySQL table output..." rows="8" autofocus></textarea></p>
	<p><button>Convert</button></p>
</form>
