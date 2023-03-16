<?php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<?php
if (isset($_POST['symb'])) {
    $symb = $_POST['symb'];
    $symbol = strlen($symb);
    $words = count(explode(' ', $symb));
    $space = count(explode(' ', $symb)) - 1;
    echo 'Символов: ' .$symbol. '<br>'. 'Слов: ' .$words. '<br>'. 'Пробелов: '.$space;
}
?>
</body>
</html>