<html>
    <style>
.img{
background-image: url("https://help.powr.io/hc/article_attachments/360040990294/mceclip1.png");
background-repeat: no-repeat;
background-position: right;
}

    </style>
      <div class="img">
        <img src="https://help.powr.io/hc/article_attachments/360040990294/mceclip1.png"> 
    </div>
</html>
<?php
extract($_REQUEST);
$f1=fopen("datat.txt","a");
fwrite($f1,"Name:");
fwrite($f1,$name);
fwrite($f1,"\n");
fwrite($f1,"Email:");
fwrite($f1,$email);
fwrite($f1,"\n");
fwrite($f1,"Number:");
fwrite($f1,$number);
fwrite($f1,"\n");
fwrite($f1,"Review:");
fwrite($f1,$review);
fwrite($f1,"\n");
fclose($f1)
?> 