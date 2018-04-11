<textarea name="list" form="signs"></textarea>

<form method="POST" id="signs">
	<input type="submit">
</form>

<?php
	if (isset($_POST['list'])) {
	  
		$sortedList = explode(',', $_POST['list']);
		sort($sortedList);

		echo "<ol>";

		foreach ( $sortedList as $element ) {
			echo "<li>$element</li>";
		}

		echo "</ol>";
	}
?>