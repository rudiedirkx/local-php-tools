<?php

if (isset($_POST['code'])) {
	$data = json_decode($_POST['code'], true);
	echo '<table border="1" cellpadding="5" cellspacing="0">';
	foreach ($data as $date => $row) {
		echo '<tr>';
		echo '<td>' . htmlspecialchars($date) . '</td>';
		foreach ($row as $cell) {
			echo '<td>' . htmlspecialchars($cell) . '</td>';
		}
		echo '</tr>';
	}
	echo '</table>';
	exit;
}

require 'tpl.header.php';

?>
<form action method="post">
	<p><textarea name="code" autofocus class="single" placeholder="JSON..."></textarea></p>
	<p><button>Convert</button></p>
</form>
