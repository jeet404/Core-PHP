<html>
<head>
<title>Project Document</title>
</head>

<body>
<form action="Demo1.php" method="post">
<b>Database Name : </b><br>
<input type="text" name="dbnm">
<br><br>
<b>Table Name : </b><br>
<input type="text" name="tab_nm">
<br><br>
<b>Server Name : </b><br>
<input type="text" name="ser_nm">
<br><br>
<b>DB User Name : </b><br>
<input type="text" name="db_usrnm">
<br><br>
<b>DB Password : </b><br>
<input type="text" name="db_pass"><br>
<br><br>
<input type="submit">
</form>
</body>
</html>

<?php

    if(isset($_POST['ser_nm']))
    {
        $file = fopen("Connect.php","w");
        $data = "<?php \n error_reporting(0);\n";
        $data = "$"."con = mysqli_connect('".$_POST['ser_nm']."','".$_POST['db_usrnm']."','".$_POST['db_pass']."');\n";
        $data .= "mysqli_select_db("."$"."con".",'".$_POST['dbnm']."');"; 
        fwrite($file,$data."\n?>");
        fclose($file);
    }

?>