<!--Page for an index of advertisements-->


<?php

//require_once "../models/Ad.php";
$ads = Ad::getAds();

?>

<div class="container ad-index">
	<br>
	<?php if (! empty($ads)) { ?>
	<?php foreach($ads as $ad): ?>
    <a href="/show?ad=<?php echo($ad->id) ?>">
			<div class="well text-center col-md-6">
				<h4><?= $ad->name ?></h4>
				<p>Description: <?= $ad->description ?></p>
		        <img class="ad-img" src=<?= $ad->image ?> id='ad_image'>
			</div>
		</a>
	<?php endforeach; } else { ?>
  <?php echo "No ads met your search results. <a href='/index'> clear search</a>"; } ?>

</div>

<br>
<br>
