<!DOCTYPE html>
<html lang="en, ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=980px, initial-scale=1.0">
    <title> PHP Practice from Alis </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

    <div class="flex-container">

      <div class="header">
          <?php include 'logo.inc.php' ?>
          <?php include 'menu.inc.php' ?>
      </div>

     <div class="about_me">
          <h1>  <?php  echo $p  ?> </h1>

      <div class="data">
          <div class="myImg">
              <?php  echo '<img src="img/2.jpg">'; ?>
          </div>
            <div class="fullname">
              <?php  include 'knowledge.inc.php'; ?>
              <p> Меня зовут:
                <?php echo $name, ' ', $surname .'<br>';
                      echo 'Ник:',' ', $nickname .'<br>';
                      echo 'Страна:', ' ', $country .'<br>';
                      echo 'Город:', ' ', $city .'<br>';
                      echo 'Возраст:', ' ';
                      if($age >= 18 && $age < 60){
                      echo 'Еще работать и работать';
                      }elseif ($age >= 1 && $age < 18)
                      {echo 'Еще рано работать, отдыхай';}
                      elseif ($age >= 60)
                      {echo 'Пора на пенсию на Мальдивы';} ?>
              </p>
            </div>
      </div>

      <div class="article">
        <p class="text">
         За время обучения я познакомилась с языками:
          <ol>
            <li>Программирования: <?php echo $prog;?> </li> <br>
            <li>Разметки: <?php echo $razmetka; ?> </li> <br>
            <li>Стилей: <?php echo $style; ?> </li> <br>
          </ol>
        </p>
      </div>

      <div class "tipes">
         <p class="text">
           Математические операции:
            <ol>
              <li>  сложение <?php echo  $h + $j;?> </li> <br>
              <li>  вычитание <?php echo  $h - $j;?> </li> <br>
              <li>  умножение <?php echo  $h * $j;?> </li> <br>
              <li>  деление <?php echo  $h / $j;?> </li> <br>
              <li>  остаток от деления <?php echo  $h % $j;?> </li> <br>
              <li>  возведение в степень <?php echo  $h ** $j;?> </li> <br>
            </ol>
        </p>
       </div>

          <?php include 'footer.inc.php' ?>
    </div>
    </div>
</body>
</html>
