<head>
  <link rel="stylesheet" href="../styles/main.css">
  <title><?php echo $section ?> | Noted</title>
</head>
<body>
<nav>
<a class="<?php if ($section == "New Note") { echo "current-tab"; } ?>" href="/includes/new.php">New Note</a>
  <a class="<?php if ($section == "Notes") { echo "current-tab"; } ?>" href="/includes/notes.php">All Notes</a>
  <a class="<?php if ($section == "Search") { echo "current-tab"; } ?>" href="/includes/search.php">Search Notes</a>
</nav>
