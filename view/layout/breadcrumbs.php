<ol class="breadcrumb">
	<?php
	if (get_route() == "home")
		echo '<li>Home</li>';
	else
		echo '<li><a href="index.php">Home</a></li>';

	if (get_route() == "metal_maiden")
		echo '<li>View tank profile</li>';
	else if (get_route() == "spreadsheet")
		echo '<li>Tank sheet</li>';
	else if (get_route() == "search")
		echo '<li>Search</li>';
	else if (get_route() == "changelog")
		echo '<li>Changelog</li>';
	else if (get_route() == "statistics")
	{
		if (isset($_GET["category"]))
		{
			if (in_array(strtolower($_GET["category"]), ["atg", "ht", "lav", "lt", "mt", "spg"]))
				echo '<li><a href="index.php?route=statistics">Statistics</a></li><li>' . strtoupper(htmlentities($_GET["category"])) . '</li>';
			else
				echo '<li><a href="index.php?route=statistics">Statistics</a></li><li>ATG</li>';
		}
		else
			echo '<li>Statistics</li>';
	}
	?>
</ol>