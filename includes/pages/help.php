<?php  
// Fetch help documentation from database at higher level but just maintain this for now
	if (isset($_GET['subpage'])) {
		switch ($_GET['subpage']) {
			
			case 'home':
				include 'includes/pages/help/help-home.php';
				break;

			case 'setting':
				include 'includes/pages/help/help-setting.php';
				break;

			case 'profile':
				include 'includes/pages/help/help-profile.php';
				break;

			case 'library':
				include 'includes/pages/help/help-library.php';
				break;

			case 'attendance':
				include 'includes/pages/help/help-attendance.php';
				break;

			default:
				header('location: index.php?page=help');
				break;
		}
	}
?>
<?php if (!isset($_GET['subpage'])): ?>
<div class="jumbotron">
	<p class="text-center lead h1">Welcome To Help Page</p>
	<p class="text-midnight-blue p-2">Here you will find all the documentation to do the things correctly. For the purpose of making this easier. There's individual help page related with home,setting.profile and all other things. There is a seperate help related with attendance and Library and payment help is also mentioned here. You will get all the help you need. If you still have problem contact the administrator.</p>
</div>	
<?php endif ?>
