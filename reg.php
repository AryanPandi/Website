<?php
              
if(isset($_POST['reg_form']))
{
$data=$_POST['reg_form'];
$fp = fopen('d.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}
?>