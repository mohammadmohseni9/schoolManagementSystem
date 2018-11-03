<?php include_once 'includes/admin-header.php'; ?>
<?php  
// Checking if a user is logged in or not
$loggedIn = Session::getLoggedIn();
if (!$loggedIn) {
  header('location: admin-login.php');
}else {
  $usertype = Session::getUserType();
  if ($usertype != 'superuser') 
  {
    header('location: ../');
    
  }
}

?>
<!-- main navigation  -->
<?php include_once 'includes/nav/admin-main-nav.php'; ?>
<div class="container-fluid">
  <div class="row">
    <!-- Side Bar -->
    <div class="col-md-2 d-none d-md-block bg-light sidebar" id="slide">
      <!-- Side-nav here -->
     <?php include_once 'includes/nav/side-nav.php'; ?>
    </div>
    <!-- ./sidebar -->


      <!-- Main Content -->
    <div role="main" class="col-sm-12 ml-sm-auto col-md-10 pt-3" id="main-page">
      <!-- Show Page -->
      <!-- <div class="page-name title">
        Features
      </div>
       -->
      <?php  
        if (isset($_GET['option'])) {
          $option = $_GET['option'];
          switch ($option) 
          {
            case 'library':
              include_once 'includes/pages/admin-library.php';
              break;
            case 'attendance':
              include_once 'includes/pages/admin-attendance.php';
              break;
            case 'users':
              include_once 'includes/pages/admin-users.php';
              break;
            case 'students':
              include_once 'includes/pages/admin-students.php';
              break;
            case 'permission':
              include_once 'includes/pages/admin-permission.php';
              break;
            case 'payment':
              include_once 'includes/pages/admin-payment.php';
              break;
            default:
                echo '404 Error';
              break;
          }
        }else if (isset($_GET['subpage']))
        {
          $subpage = $_GET['subpage'];
          switch ($subpage) {
            case 'staffs':
              include_once 'includes/pages/admin-staffs.php';
              break;
            case 'report':
                include_once 'includes/pages/admin-report.php';
                break;
            case 'analytics':
              include_once 'includes/pages/admin-analytics.php';
              break;
            case 'features':
              include_once 'includes/pages/features.php';
              break;
            case 'notice':
              include_once 'includes/pages/notices.php';
              break;
          }
        }else{
          include_once 'includes/pages/admin-overview.php';
        }
      ?>
    </div>
  </div>
</div>
  <!--Footer  -->
<?php include_once 'includes/admin-footer.php' ?>
