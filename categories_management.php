<?php
require_once "./utils/functions.inc.php";
require_once "./sql/db.php";
$metadata = [
  "title" => "GTA 5",
  "description" => "GTA 5 - Les Categories Management !"
];
getPartial('head.inc', $metadata);
?>
<?php require_once "./inc/head.inc.php"; ?>
<h1>Categories Management</h1>
<?php require_once "./inc/footer.inc.php"; ?>

<?php
getPartial('footer.inc');
?>