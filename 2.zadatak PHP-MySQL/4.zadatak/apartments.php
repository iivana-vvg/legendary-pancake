<?php
	
	if (isset($action) && $action != '') {
		$query  = "SELECT * FROM apartments";
		$query .= " WHERE id=" . $_GET['action'];
		$result = @mysqli_query($MySQL, $query);
		$row = @mysqli_fetch_array($result);
			print '
			<div class="apartments">
				<img src="apartments/' . $row['picture'] . '" alt="' . $row['title'] . '" title="' . $row['title'] . '" style="width:500px;height:400px;">
				<h2>' . $row['title'] . '</h2>
				<p>'  . $row['description'] . '</p>
				<time datetime="' . $row['date'] . '">' . pickerDateToMysql($row['date']) . '</time>
				<hr>
			</div>';
	}
	else {
		print '<h1>APARTMENTS</h1>';
		$query  = "SELECT * FROM apartments";
		$query .= " WHERE archive='N'";
		$query .= " ORDER BY date DESC";
		$result = @mysqli_query($MySQL, $query);
		while($row = @mysqli_fetch_array($result)) {
			print '
			<div class="apartments">
				<img src="apartments/' . $row['picture'] . '" alt="' . $row['title'] . '" title="' . $row['title'] . '"style="width:500px;height:400px;">
				<h2>' . $row['title'] . '</h2>';
				if(strlen($row['description']) > 300) {
					echo substr(strip_tags($row['description']), 0, 300).'... <a href="index.php?menu=' . $menu . '&amp;action=' . $row['id'] . '"><b>More</b></a>';
				} else {
					echo strip_tags($row['description']);
				}
				print '
				<time datetime="' . $row['date'] . '"> </br> Dostupno od ' . pickerDateToMysql($row['date']) . '</time>
				<hr>
			</div>';
		}
	}
?>