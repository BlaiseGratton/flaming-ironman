<?php

require_once("includes/config.php");
include(ROOT_PATH . 'includes/header.php');



?>


<nav>
<a href="#" onclick="<?php $section='new_note' ?>">New Note</a>
<a href="#" onclick="<?php $section='all_notes'?>">All Notes</a>
  <a href="#">Search Notes</a>
</nav>

<?php echo $section ?>


