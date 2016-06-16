<!DOCTYPE html>
<html>
<head>
  <title>php</title>
  <meta charset="utf-8" />
  <!--подключение bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
  <!--Подключение jquery-->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
</head>
<body>
  <?php
    //подключение файла со статьями и базы даных
  require_once("models/articles.php");
    require_once('database.php');
    $article = article_get($_GET['id']);
    ?>
  <div id="page-wrap">
  <div class="menu-fixed">
  <div id="header">
    <div class="menu">
        <nav>
          <ul>
            <span class="logo"><a href="index.php"><img src="img/Gradle_verticle-logo-small.png" alt="logotip"></a></span>
            <li><a href="login.php">log in</a></li>
            <li><a href="#">bla-bla</a></li>
            <li><a href="#">bla-bla</a></li>
            <li><a href="article.php">article</a></li>
          </ul>
        </nav>
    </div>
  </div>
</div>
