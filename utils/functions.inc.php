<?php
function getPartial($partial, $metadata = null) // si pas de metadata donc null
{
  ob_start(); // memoire temporaire
  if ($metadata) {
    extract($metadata);
  }

  require_once "./inc/{$partial}.php";
  ob_flush(); // recuperer tout ce qui ete stocke en memoire
  ob_clean(); // vide le memoire temporaire
}
function debug($array)
{
  echo '<pre>';
  print_r($array);
  echo '</pre>';
}

function redirect_to($New_Location)
{
  header("location:" . $New_Location);
  exit();
}
