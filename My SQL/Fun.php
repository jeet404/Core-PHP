<?php

    include("Connect.php");//Similer to #include in C language
        mysqli_select_db($con,"ksc_students");//Selects Database
    //Return name of current default database
    if($result = mysqli_query($con,"SELECT DATABASE()"))
    {
        $row = mysqli_fetch_row($result);
        echo "<br>Default Database is : " . $row[0];
    }
    if($result = mysqli_query($con,"SELECT * FROM students"))
    {
        $row = mysqli_fetch_row($result);
        //print_r($row);
        if(mysqli_num_rows($result)>0)
        {
            echo "<br>Id " . $row[0];
            echo "<br>Id " . $row[1];
            echo "<br>Id " . $row[2];
            echo "<br>Id " . $row[3];
        }
        else
        {
            echo "<br>No Data Found !!!";
        }
    }
    else
    {
        echo mysqli_error($con);
    }
    mysqli_close($con);

?>