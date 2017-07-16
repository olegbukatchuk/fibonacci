<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>|| Parallels</title>
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="annotation">
                <p>Сервис принимает целое число, которое является порядковым номером в ряде Фибоначчи и возвращает значение этого элемента.</p>
            </div>
            <div class="row">
              <?php

              function fibbonacci($n) {
                  if ($n == 0 || $n == 1)
                      return $n;
                  else {
                      return fibbonacci($n - 1) + fibbonacci($n - 2);
                  }
              }

              if (isset($_POST['number'])) {

                  $fibbonacci = $_POST['number'];

                  $result = fibbonacci($fibbonacci);
              }
              ?>
              <form action="/" method="post" enctype="multipart/form-data">
                  <input type="text" name="number" size="20" placeholder="Введите целое число" pattern="^[ 0-9]+$">
                  <input type="submit" value="Посчитать значение">
              </form>
                <div class="result"><?php echo "$result";?></div>
            </div>
        </div>
    </body>
</html>
