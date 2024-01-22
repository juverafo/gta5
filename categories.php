<?php
require_once "./utils/functions.inc.php";
require_once "./sql/db.php";

$metadata = [
  "title" => "Ajoutez des catégories",
  "description" => "Ajoutez des catégories"
];

getPartial("head.inc", $metadata);

require_once "./inc/head.inc.php";

if (!empty($_POST)) {
  if (isset($_POST['submit']) && !empty($_POST['title'])) {
    extract($_POST);

    /**
     * On sécurise les inputs pour éviter des tags html, php malvaillants et nous supprimons les espaces en début et fin.
     */
    $title = htmlspecialchars(strip_tags(trim($_POST['title'])));

    $sql = "INSERT INTO category (title_category) VALUES (:title);";

    /**
     * Paramètres pour le BindValue() qui sert à protéger les requetes SQL
     */
    $params = [':title' => $title];

    if ($a === 'edit') {
      $sql = "UPDATE category SET title_category = :title WHERE id_category = :id;";
      $params = [
        "title" => $title,
        "id" => $id
      ];
    }

    $id = sql($sql, $params, true);
  } else {
    die('Le formulaire n\'est pas complet');
  }
}
$categories = sql('SELECT * FROM category')->fetchAll();

if (isset($_GET['a'], $_GET['id'])) {
  extract($_GET);
  if ($a === 'delete') {
    $cat = sql("DELETE FROM category WHERE id_category=:id;", [':id' => $id]);
    header("location: /GTA5/categories.php");
  }
  if ($a === 'edit') {
    $cat = sql("SELECT * FROM category WHERE id_category =:id", [":id" => $id])->fetch();
  }
}

?>
<main>
  <h1><?= $metadata['title']; ?></h1>

  <form method='post' class='m-3'>
    <div class="mb-3">
      <label for="title" class="form-label">Titre</label>
      <input type="text" class="form-control w-25" id="title" aria-describedby="title" name='title' value="<?= $cat['title_category'] ?? ''; ?>">
    </div>
    <input type="hidden" name="a" value="<?= $a ?? ''; ?>">
    <input type="hidden" name="id" value="<?= $id ?? ''; ?>">
    <input type="submit" name="submit" class="btn btn-cart" value='Ajouter'>
  </form>

  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Categories</th>
        <th scope="col">Editer / Supprimer</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($categories as $categorie) :
      ?>
        <tr>
          <th scope="row"><?= $categorie['id_category']; ?></th>
          <td><?= $categorie['title_category']; ?></td>
          <td>
            <a href="<?php echo "./categories.php?a=edit&id={$categorie['id_category']}" ?>" class="btn btn-warning">Modifier</a>
            <a href="<?php echo "./categories.php?a=delete&id={$categorie['id_category']}" ?>" class=" btn btn-danger" onclick="return confirm('Etes-vous sûr?')">Supprimer</a>
          </td>
        </tr>
      <?php
      endforeach;
      ?>

    </tbody>
  </table>
</main>

<?php
require_once './inc/footer.inc.php';
?>