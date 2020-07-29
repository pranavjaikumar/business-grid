<?php
include "config.php";
mysqli_query($link, "SELECT JSON_OBJECT('id',id,'name',name,'description',description,'price',price) INTO OUTFILE '' FROM furniture");
