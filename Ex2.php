<?
	$i = 0;
	do {
		if ($i == 0) {
			echo $i." � ��� ����.<br>";
		} elseif ($i % 2 == 0) {
			echo $i." � ��� ������ �����.<br>";
		} else {
			echo $i." � ��� �������� �����.<br>";
		}
		$i++;
	} while ($i < 11);