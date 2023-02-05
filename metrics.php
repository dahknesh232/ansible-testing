<?php
$js = file_get_contents('js/facts.json');
$js1 = json_decode($js,true);
print_r($js1);
?>
