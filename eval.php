<?php

if (isset($_POST['code'])) {
	header('Content-type: text/plain');
	eval($_POST['code']);
	exit;
}

require 'tpl.header.php';

?>
<form action method="post">
	<p><textarea name="code" autofocus class="single" placeholder="Code..."></textarea></p>
	<p><button>Eval</button></p>
</form>

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
})();
</script>
