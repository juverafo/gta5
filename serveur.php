<?php
require_once "./utils/functions.inc.php";
$metadata = [
  "title" => "GTA 5",
  "description" => "GTA 5 - Votre serveur de GTA 5 Role Play !"
];
getPartial('head.inc', $metadata);
?>
<?php require_once "./inc/head.inc.php"; ?>
<h1>Serveur GTA 5</h1>
<?php require_once "./inc/footer.inc.php"; ?>
</body>

</html>
<?php
getPartial('footer.inc');
?>