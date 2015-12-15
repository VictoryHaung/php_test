<?
ob_implicit_flush(true);
ob_end_flush();
$i = 0;
while (1){
 echo $i++; 
 sleep(1);
}
