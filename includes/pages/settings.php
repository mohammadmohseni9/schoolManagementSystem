<?php  
	if (isset($_GET['subpage'])) {
		switch ($_GET['subpage']) {
			case 'general':
				include 'includes/pages/settings/generalSetting.php';
				break;
			
			case 'advance':
				include 'includes/pages/settings/advanceSetting.php';
				break;

			case 'login':
				include 'includes/pages/settings/loginSetting.php';
				break;

			case 'staff':
				include 'includes/pages/settings/staffSetting.php';
				break;

			case 'guardian':
				include 'includes/pages/settings/guardianSetting.php';
				break;

			case 'student':
				include 'includes/pages/settings/studentSetting.php';
				break;

			default:
				header('location: index.php?page=settings');
				break;
		}
	}
?>
<?php if (!isset($_GET['subpage'])): ?>
	
<?php endif ?>
