

<?php
	$campaign_id = $row["fund_id"];
	$campaign_goal = $row["goal"];
?>
<div class = "container" style = "background-color: #fff">
	<div style = "padding-top: 35px; padding-bottom: 35px;">
		<div class = "col-md-2"></div>
		<div class = "col-md-2">
			<img src=<?php echo $row["image_url"] ?> width = "200px" height = "200px" style = "border-radius: 50%">
		</div>
		<div class = "col-md-1"></div>
		<div class = "col-md-5">
			<h3> <a href="campaign.php?id=<?php echo $campaign_id;?>"> <b> <?php echo $row["campaign_title"] ?> </b> </a> </h3>
			<p>
				<?php //echo $row["fund_description"] ?>
				<?php echo substr($row["fund_description"], 0, 340) ?>
			</p>
		</div>
		<div class = "col-md-2"></div>
	</div>
</div>

<?php
	//image : $row["image_url"]
	//fund description : $row["fund_description"]
?>