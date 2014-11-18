<?php
if(is_numeric($_GET['dzien']) && is_numeric($_GET['miesiac']) && is_numeric($_GET['rok']) && is_string($_GET['imie']) && is_string($_GET['nazwisko'])){
echo $_GET['imie'].' '.$_GET['nazwisko'].' '.$_GET['dzien'].'-'.$_GET['miesiac'].'-'.$_GET['rok'];
}
else {
  echo 'niepoprawne dane';
}
?>
