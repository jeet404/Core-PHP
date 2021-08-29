<?php

    include("Connect.php");
    $result = mysqli_query($con,"SELECT * FROM students");
    /* 
    if($result)
    {
        echo "<br>Total Column Fatched : " . mysqli_num_fields($result);
        $data = mysqli_fetch_array($result,MYSQLI_ASSOC);
        echo "<br>Name: " . $data[0];
        print_r($data);
        
    } 
    else 
    {
        echo "Not Execute!!!!!";
    }
    */

    /*
    $sql = "INSERT INTO students(Id,Name,Class,Course) VALUES (NULL, 'Mr. D','1','BTECH')";
    if(mysqli_query($con,$sql))
    {
        echo "<br>New Data Inserted with id : ". mysqli_insert_id($con);
    }
    */
    /*
    if($result)
    {
        for($i=0;$i<=3;$i++)
        {
        $data = mysqli_fetch_assoc($result);
        echo "<br>Name : " . $data['Name'];
        echo "<br>Class : " . $data['Class'];
        echo "<br>Course : " . $data['Course'];
        }
        
    }
    */

    /*
    if(mysqli_query($con,"DELETE FROM students WHERE Id=1"))
    {
        echo "<br>Number of Deleted Record : " . mysqli_affected_rows($con);
    }
    */

    /*
    if($result)
    {
        $data = mysqli_fetch_all($result);
        foreach($data as $row)
        {
            print_r($row);
            echo "<br>";
        }
    }
    else
    {
        echo mysqli_error($con);
    }
    mysqli_close($con);
    */

    /*
    if($result)
    {
        while($data = mysqli_fetch_field($result))
        {
            print_r($data);
            echo "Name : " . $data -> Name . "<br>";
        }
    }
    */

    /*
    if($result)
    {
        while($row = mysqli_fetch_object($result))
        {
            echo "Name : " . $row -> Name . "Course : " . $row -> Course . "<br>";
        }
    }
    */


    if($result)
    {
        mysqli_data_seek($result,4);
        $row = mysqli_fetch_row($result);
        echo("Name : " . $row[1] . "Course : " . $row[3] . "<br>" );
    }
    else
    {
        echo mysqli_error($con);
    }
    mysqli_close($con);
?>