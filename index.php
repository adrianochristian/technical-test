<?php
//Main
if($_POST['number']){
  $number             = $_POST['number'];
  $dividers           = [3,5];
  $result             = calculate($number, $dividers);
}

function calculate($number, $dividers){
    if(!validator($number)){
      return $result = 'Inserted data is invalid';
    }

    if($number <= 3){
      return $result = 'There are no numbers that can be divided by 3 or 5 before the inserted one';
    }

    $result = 0;
    for($i = 1; $i < $number; $i++){
        foreach($dividers as $divider){
           if($i % $divider == 0){
              $result += $i;
            }
        }
    }

  return $result;
}

function validator($number){
    if(is_numeric($number) && !is_float($number)){
        return true;
    }
}
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
      <form method="POST" action="index.php">
        <div class="info">
          <div class="info-item">
            <label class="icon" for="number"><i class="las la-calculator"></i></label>
            <input type="text" name="number" id="number" placeholder="Insert a int number" required/>
          </div>
          <button type="submit">Calculate</button>
        </div>
          <h3>Result: <? echo $result ?></h3>
      </form>
    </div>
  </body>
</html>
<??>