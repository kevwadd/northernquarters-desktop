<?php
$sponsors = get_field('gbl_sponsors', 'options');	
?>

<?php if (!empty($sponsors)) { ?>
<section id="sponsors-section">
	<div class="container">
		<div class="bordered-box">
			<h3 class="section-header"><span>Sponsors</span></h3>
			<ul class="sponsor-links list-inline">
				<?php foreach ($sponsors as $sponsor) { ?>
				<li class="list-inline-item">
					<a href="<?php echo $sponsor['website']; ?>" title="<?php echo $sponsor['name']; ?>" style="background-image: url(<?php echo $sponsor['logo']; ?>)"><span class="sr-only"><?php echo $sponsor['name']; ?></span></a>
				</li>
				<?php } ?>
			</ul>
		</div>
	</div>
</section>
<?php } ?>