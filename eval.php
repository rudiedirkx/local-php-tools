<?php

if (isset($_POST['code'])) {
	header('Content-type: text/plain');
	eval($_POST['code']);
	exit;
}

require 'tpl.header.php';

?>
<form action method="post">
	<p><textarea name="code" autofocus class="single code" placeholder="Code..."></textarea></p>
	<p><button>Eval</button></p>
</form>

<script src="https://rudiedirkx.github.io/auto-indent/auto-indent.js"></script>
<script>
(function() {
	const ta = document.querySelector('textarea');
	ta.addEventListener('input', function(e) {
		localStorage.toolsEvalCode = this.value;
	});

	const code = localStorage.toolsEvalCode;
	if (code) {
		ta.value = code;
	}

	doAutoIndent(ta);
})();
</script>
