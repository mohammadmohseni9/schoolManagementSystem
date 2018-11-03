
<?php $homeHelp = $option->getOptions('home_help'); ?>
<?php  ?>
<div class="jumbotron">
	<?php echo htmlspecialchars_decode($homeHelp[0]->content); ?>
</div>