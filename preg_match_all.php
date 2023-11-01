<?php

require 'tpl.header.php';

if (isset($_POST['pattern'], $_POST['subject'])) {
	$subject = $_POST['subject'];
	// $subject = str_replace("\r\n", "\n", $subject);
	preg_match_all($_POST['pattern'], $subject, $matches);
	echo '<pre><span style="background: pink">';
	echo htmlspecialchars(print_r($matches, true));
	echo '</span></pre>';
}

?>
<form action method="post">
	<p><input name="pattern" placeholder="Full pattern: #...#i" value="<?= htmlspecialchars($_POST['pattern'] ?? '') ?>" class="code"></p>
	<p><textarea name="subject" placeholder="Subject..." rows="8" class="code"><?= htmlspecialchars($_POST['subject'] ?? '') ?></textarea></p>
	<p><button>Eval</button></p>
</form>
