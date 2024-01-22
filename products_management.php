<?php
require_once "./utils/functions.inc.php";
$metadata = [
  "title" => "GTA 5",
  "description" => "GTA 5 - Les Produits Management !"
];
getPartial('head.inc', $metadata);
?>
<?php require_once "./inc/head.inc.php"; ?>
<h1>Products Management</h1>
<?php require_once "./inc/footer.inc.php"; ?>

<?php
getPartial('footer.inc');
?>