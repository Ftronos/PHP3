<?
	$i = 0;
	do {
		if ($i == 0) {
			echo $i." Ц это ноль.<br>";
		} elseif ($i % 2 == 0) {
			echo $i." Ц это четное число.<br>";
		} else {
			echo $i." Ц это нечетное число.<br>";
		}
		$i++;
	} while ($i < 11);