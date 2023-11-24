<?php
    include('./connection.php');

    $name = $_POST['name'];
    $course = $_POST['course'];
    $age = $_POST['age'];

    $sql = "INSERT INTO student (`name`, `course`, `age`) VALUES ('$name', '$course', '$age')";

    $qu = mysqli_query($conn, $sql);

    if ($qu){
        echo "Successfully inserted.";
        // header("Location : http://172.16.80.10/23mca023/Aswin/Php/student_list.php");
        echo "<script>window.location.href = 'http://172.16.80.10/23mca023/Aswin/Php/student_list.php'</script>";
    }else{
        echo "Error : ".mysqli_error($conn);
    }



?>