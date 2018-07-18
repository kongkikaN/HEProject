<div class = "container" style = "background-color: #fff">
	<div style = "padding-top: 35px; padding-bottom: 35px;">
		<div class = "col-md-2"></div>
		<div class = "col-md-2">
			<img src=<?php echo $row["image_url"] ?> width = "200px" height = "200px" style = "border-radius: 50%">
		</div>
		<div class = "col-md-1"></div>
		<div class = "col-md-5">
			<h3> <b> <?php echo $row["campaign_title"] ?> </b> </h3>
			<p>
				<?php echo $row["fund_description"] ?>
			</p>
		</div>
		<div class = "col-md-2"></div>
	</div>
</div>

<?php
	//image : $row["image_url"]
	//fund description : $row["fund_description"]
?>