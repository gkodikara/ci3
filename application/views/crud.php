<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
</head>
<body>
	<div>
		<a href='<?php echo site_url('crud/render/association')?>'>Association</a> |
		<a href='<?php echo site_url('crud/render/club')?>'>Club</a> |
		<a href='<?php echo site_url('crud/render/team')?>'>Team</a> |
		<a href='<?php echo site_url('crud/render/competition')?>'>Competition</a> |
		<a href='<?php echo site_url('crud/render/venue')?>'>Venue</a> |
		<a href='<?php echo site_url('crud/render/arena')?>'>Arena</a> |
		<a href='<?php echo site_url('crud/render/association_venue')?>'>Association Venue</a> |
		<a href='<?php echo site_url('crud/render/coach_team')?>'>Coach Team</a> |
		<a href='<?php echo site_url('crud/render/fixture_statistics')?>'>Fixture Statistics</a> |
		<a href='<?php echo site_url('crud/render/player_statistics')?>'>Player Statistics</a> |
		<a href='<?php echo site_url('crud/render/competition_team')?>'>Competition Team</a> |
		<a href='<?php echo site_url('crud/render/competition_pool_team')?>'>Competition Pool Team</a> |
		<a href='<?php echo site_url('crud/render/result')?>'>Result</a> |
		<a href='<?php echo site_url('crud/render/sportcode')?>'>Sport Codes</a> |
		<a href='<?php echo site_url('crud/render/template')?>'>Template</a> |
		<a href='<?php echo site_url('crud/render/tribunal')?>'>Tribunal</a> |
		<a href='<?php echo site_url('crud/render/user_payment')?>'>User Payment</a> |
		<a href='<?php echo site_url('crud/render/parents_to_players')?>'>Parents to Players</a> |
		<a href='<?php echo site_url('crud/render/player_team')?>'>Player Team</a> |
		<a href='<?php echo site_url('crud/render/system_template')?>'>System Template</a> |
		
	</div>
	<div style='height:20px;'></div>  
    <div style="padding: 10px">
		<?php echo $output; ?>
    </div>
    <?php foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
	<?php endforeach; ?>
	



</body>
</html>
