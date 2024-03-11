<?php
require('./db/connect.php');

$sql = "select * from urls";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>URL shorter</title>
</head>

<body>
  <form action="./functions/add.php" method="post">
    <input type="text" placeholder="Enter Long URL here!" name="long_url">
    <button type="submit">Generate Short URL</button>
  </form>

  <section>
    <ul>
      <?php foreach ($rows as $key => $value) : ?>
      <li><a href="/redirect/?r=<?= $value['short_url'] ?>">localhost:8000/redirect/?r=<?= $value['short_url'] ?></a>
        <span> -> <?= $value['long_url'] ?></span>
      </li>
      <?php endforeach ?>

    </ul>
  </section>
</body>

</html>