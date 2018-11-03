    <?php include_once 'includes/pages/header.php'; ?>
    <!-- main nav include here -->
    <?php include_once 'includes/nav/main-nav.php'; ?>
    <div class="container-fluid">
      <div class="row">
        <div id="side-bar">
          <div class="col-md-2 d-none d-md-block bg-light sidebar" id="slide">
            <!-- Include side-nav.php here -->
           <?php 
            if (isset($_GET['page'])){

              $page = $_GET['page'];
              switch ($page) {
                case 'settings':
                  include_once 'includes/nav/side-nav-settings.php';
                  break;
                case 'profile':
                  include_once 'includes/nav/side-nav-profile.php';
                  break;
                case 'help':
                  include_once 'includes/nav/side-nav-help.php';
                  break;
                default :
                  include_once 'includes/nav/side-nav.php';
                  break;
              }
            }else{
              include_once 'includes/nav/side-nav.php';
            }
          ?>
          </div><!-- ./sidebar -->
          
        </div>
          <!-- Status Display Section -->
        <main role="main" class="col-sm-12 ml-sm-auto col-md-10 pt-3" id="main-page">
        <?php 
          if (isset($_GET['page'])){
          
            $page = $_GET['page'];
            
            switch ($page) {
              case 'settings':
                include 'includes/pages/settings.php';
                break;
              case 'profile':
                include 'includes/pages/profile.php';
                break;
              case 'help':
                include 'includes/pages/help.php';

                break;
            }
          }else if(isset($_GET['management'])){
            $management = $_GET['management'];
            switch ($management) {
              case 'students':
                include 'management/student.php';
                break;
              case 'library':
                include 'management/library.php';
                break;
              case 'attendance':
                include 'management/attendance.php';
                break;
              case 'staffs':
                include 'management/staff.php';
                break;
              case 'payment':
                include 'management/payment.php';
                break;
              case 'users':
                include 'management/users.php';
                break;  
            }

          }else if(isset($_GET['subpage'])){
            $subpage = $_GET['subpage'];
            switch ($subpage) {
              case 'report':
                include 'includes/pages/report.php';
                break;
              case 'analytics':
                include 'includes/pages/analytics.php';
                break;
              case 'overview':
                include 'includes/pages/main-index.php';
                break;
            }

          }else{
            include 'includes/pages/main-index.php';
          } 
          ?>
        </main>
      </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="includes/js/jquery.js"></script>
    <script src="includes/js/popper.min.js"></script>
    <script src="includes/js/tether.min.js"></script>
    <script src="includes/js/bootstrap.min.js"></script>
    <script src="includes/js/script.js"></script>
    <script>
      <?php  
      if(isset($_GET['management'])){
        $management = $_GET['management'];
        switch ($management) {
          case 'students':
            include 'includes/js/student.js';
            break;
          case 'library':
            include 'includes/js/library.js';
            break;
          case 'attendance':
            include 'includes/js/attendance.js';
            break;
          case 'staffs':
            include 'management/includes/js/staff.js';
            break;
          case 'payment':
            include 'management/includes/js/payment.js';
            break;
        }

      }
    ?>
  </script>
  </body>
</html>
