<?php
require('./db/connect.php');

// To display all the list of the urls saved on database
$sql = "select * from urls";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>URL Shortener</title>
  <link rel="stylesheet" href="./assets/styles/reset.css">
  <link rel="stylesheet" href="./assets/styles/index.css">
</head>

<body>
  <main>
    <h2>URL Shortener/.</h2>
    <br>
    <section class="generate-form">
      <form action="./functions/add.php" method="post">
        <input type="text" placeholder="Enter Long URL here!" name="long_url">
        <button type="submit">Generate Short URL</button>
      </form>
    </section>

    <section class="">
      <h4>Previously generated URLS /.</h4>
      <br>
      <table class="url-list">
        <thead>
          <tr>
            <th>Short URL</th>
            <th>Long URL</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($rows as $key => $value) : ?>
          <tr>
            <!-- Just to display the links, feel free to make your own style changes -->
            <td><a href="/q/?r=<?= $value['short_url'] ?>">
                <?= $_SERVER['HTTP_HOST'] ?>/q/?r=<?= $value['short_url'] ?></a>

            </td>
            <td> <span> <?= $value['long_url'] ?></span></td>
          </tr>
          <?php endforeach ?>
        </tbody>
      </table>
      <br>
      <ul>

      </ul>
    </section>
  </main>
</body>

</html>