<?php
// Constantes d'environnement
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "root");
define("DB_NAME", "gta5");

function getDb()
{
  // DSN de connexion
  $dsn = "mysql:dbname=" . DB_NAME . ";host=" . DB_HOST;
  // On va se connecter a la base
  try {
    // On instancie PDO
    $db = new PDO($dsn, DB_USER, DB_PASS);

    // On s'assure d'envoyer les donnes en UTF8
    $db->exec("SET NAMES utf8");
    // On definit le mode de "fetch" par defaut
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
    die("Erreur: " . $e->getMessage());
  }
  return $db;
}

function sql($sql, $param = [], $lastId = false)
{
  $db = getDb();

  try {
    $query = $db->prepare($sql);

    foreach ($param as $key => $value) {
      $query->bindValue($key, $value, PDO::PARAM_STR);
    }

    $query->execute();

    if ($lastId) {
      return $db->lastInsertId();
    }

    return $query;
  } catch (PDOException $e) {
    die('Error: ' . $e->getMessage());
  }
}


// function insertInto($query)
// {

//   $pdo = getDb();

//   // on prepare la requete
//   $pdoStatement = $pdo->prepare($query);

//   // on execute la requete

//   $pdoStatement->execute();

//   return $pdoStatement;
// }
