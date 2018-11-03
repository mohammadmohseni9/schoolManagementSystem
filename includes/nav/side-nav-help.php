<?php  
  $current_page = 'index.php?page=help';
?>
<nav>
  <ul class="nav nav-pills flex-column">
    <li class="nav-item">
      <a class="nav-link" href="<?php echo $current_page; ?>&subpage=home">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo $current_page; ?>&subpage=setting">Setting</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo $current_page; ?>&subpage=profile">Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo $current_page; ?>&subpage=library">Library</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo $current_page; ?>&subpage=attendance">Attendance</a>
    </li>
  </ul>

</nav>
