<?php 
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Technical Test</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="main-block">
      <h1>Technical Test</h1>
      <form method="POST" action="main.php">
        <div class="info">
          <div class="info-item">
            <label class="icon" for="number"><i class="las la-calculator"></i></label>
            <input type="text" name="number" id="number" placeholder="Insert a int number" required/>
          </div>
          <button type="submit">Calculate</button>
        </div>
        <?if (!empty($_SESSION["result"])){?>
          <h3>Resultado: <?echo $_SESSION["result"] ?></h3>
        <?}?>
      </form>
    </div>
  </body>
</html>