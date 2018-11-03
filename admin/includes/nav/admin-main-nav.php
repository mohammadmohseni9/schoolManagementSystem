<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top midnight-blue">
    <a class="navbar-brand" href="index.php"><?php echo $nameOfInstitution; ?></a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
   
      <ul class="navbar-nav mr-4 pr-3 ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=settings">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=help">Help</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../logout.php"><i class="fa fa-sign-out text-danger"></i> Log Out</a>
        </li>
      </ul>
    
    </div>
  </nav>
</header>