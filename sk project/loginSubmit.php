<?php
    session_start();
    $dbServername =  "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "violecar";
    #connect to server
    $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
    
    #check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $id=$_POST['idPengguna'];
    $pw=$_POST['kataLaluan'];
    $loginPage='login.php';
    $idResult = mysqli_query($conn,"SELECT idPekerja from pekerja WHERE idPekerja='$id'");
    $pwResult = mysqli_query($conn,"SELECT kataLaluan from pekerja WHERE kataLaluan='$pw'");

    if($idResult->num_rows == 0){
        echo "<script>window.alert('id pengguna tidak wujud,sila cuba lagi')</script>";
        header("refresh:1;url=$loginPage");
    }
     elseif($pwResult->num_rows == 0){
        echo "<script>window.alert('kata laluan salah,sila cuba lagi')</script>";
        header("refresh:1;url=$loginPage");
    }
     else{
        echo "<script>window.alert('kamu sudah berjaya login')</script>";
        header("refresh:1;url=index.php");
        $_SESSION["user"]=$_POST['idPengguna'];
    }
    
?>