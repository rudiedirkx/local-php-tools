<?php

require 'tpl.header.php';

if (isset($_POST['pattern'], $_POST['replacement'], $_POST['subject'])) {
	echo '<pre><span style="background: pink">';
	echo htmlspecialchars(preg_replace($_POST['pattern'], $_POST['replacement'], $_POST['subject']));
	echo '</span></pre>';
}

?>
<form action method="post">
	<p><input name="pattern" placeholder="Full pattern: #...#i" value="<?= htmlspecialchars($_POST['pattern'] ?? '') ?>" class="code"></p>
	<p><input name="replacement" placeholder="Replacement..." value="<?= htmlspecialchars($_POST['replacement'] ?? '') ?>" class="code"></p>
	<p><textarea name="subject" placeholder="Subject..." rows="8" class="code"><?= htmlspecialchars($_POST['subject'] ?? '') ?></textarea></p>
	<p><button>Eval</button></p>
</form>
