<?php
include("./database.php");

// Session
session_start();

// Taking the values from the form 
if (isset($_POST["registerStudent"])) {
    // Values from the Register Form
    $is_d2d = $_POST["typeStudent"] == 1 ? 0 : 1;
    $id_number = $_POST["id"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $password = $_POST["password"];
    $dept = $_POST["department"];
    $gender = $_POST["gender"];

    $academic_year = intval('20' . $id_number[0] . $id_number[1]);
    // Encrypting the password with MD5 and base64_encode
    $password = base64_encode(strrev(md5($password)));

    // INSERT query
    $insertQuery = $conn->query("INSERT INTO `student`(`s_id`,  `s_email`, `s_mobile`, `s_dept`, `s_gender`, `s_password`,   `s_academic_year`, `is_d2d`) VALUES ('$id_number','$email','$mobile','$dept','$gender','$password','$academic_year','$is_d2d')");

    // if successfully inserted the value in the database then show the user details page with User ID
    if ($insertQuery) {
        $_SESSION["showUser"] = true;
        echo "<script> window.location.href = './showUserDetails.php?user_id=$email'; </script>";
        var_dump($insertQuery);
    }
}
