<?php
require_once "./utils/functions.inc.php";
$metadata = [
  "title" => "GTA 5",
  "description" => "GTA 5 - S'inscrire!"
];
getPartial('head.inc', $metadata);
?>
<?php require_once "./inc/head.inc.php"; ?>
<h1>S'inscrire</h1>
<?php require_once "./inc/footer.inc.php"; ?>
</body>

</html>
<?php
getPartial('footer.inc');
?>