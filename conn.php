<?php
     $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=winery','root','');
     $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>