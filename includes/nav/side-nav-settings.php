<?php  
  $current_page = 'index.php?page=settings';
?>
<nav>
  <ul class="nav nav-pills flex-column">
    <li class="nav-item">
      <a class="nav-link active" href="<?php echo $current_page; ?>&subpage=general">General <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo $current_page; ?>&subpage=student">Students</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo $current_page; ?>&subpage=staff">Teachers</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo $current_page; ?>&subpage=guardian">Guardians</a>
    </li>
  </ul>

  <ul class="nav nav-pills flex-column">
    <li class="nav-item">
      <a class="nav-link" href="<?php echo $current_page; ?>&subpage=advance">Advance</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo $current_page; ?>&subpage=login">Login</a>
    </li>
  </ul>

</nav>
