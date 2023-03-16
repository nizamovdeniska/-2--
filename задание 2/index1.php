<?php
$datatime = date('L');
if($datatime == 1){
    $days = 366-date('z');
    $ $days.' дней до Нового Года';
}
else{
    $days = 365 - date('z');
    $ $days.' дней до Нового Года';
}

?>