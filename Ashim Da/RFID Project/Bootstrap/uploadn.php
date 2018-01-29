<?php

    require_once 'dbconfig.php';
    $query=mysql_query("INSERT INTO $tbl_name(Name,Phone,Email,Address,Designation,BloodGroup,CardNo,ExpireDate) values ('$_POST[Name]','$_POST[Phone]','$_POST[Email]','$_POST[Address]','$_POST[Designation]','$_POST[BloodGroup]','$_POST[Id]','$_POST[ExpireDate]')",$connection);

?>