<?php
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
    
    $newid=$_POST['idPengguna'];
    $pw=$_POST['kataLaluan'];
    $nm=$_POST['namaPengguna'];
    $ph=$_POST['noTelefon'];
    $signup='signup.php';
    $loginPage='login.php';
    $sql="insert into pekerja(idPekerja,kataLaluan,namaPekerja,noTelefonPekerja) VALUES('$newid','$pw','$nm','$ph')";

    $idResult = mysqli_query($conn,"SELECT idPekerja from pekerja WHERE idPekerja='$newid'");
    $nmResult = mysqli_query($conn,"SELECT namaPekerja from pekerja WHERE namaPekerja='$nm'");
    $phResult = mysqli_query($conn,"SELECT noTelefonPekerja from pekerja WHERE noTelefonPekerja='$ph'");
    if($idResult->num_rows > 0){//check id
        echo "<script>window.alert('id pengguna sudah wujud,sila guna id lain')</script>";
        header("refresh:1;url=$signup");
    }
    elseif($nmResult->num_rows > 0){//check name
        echo "<script>window.alert('Nama pengguna sudah wujud,sila log masuk ')</script>";
        header("refresh:1;url=$loginPage");
    }
    elseif($phResult->num_rows > 0){//check ph num
        echo "<script>window.alert('no telefon sudah diguna,sila guna no telefon lain atau log masuk')</script>";
        header("refresh:1;url=$signup");
    }
    elseif(strlen($ph)>11 or strlen($ph)<10 or $ph[1]!= 1 or $ph[0]!= 0 ){//check ph format
        echo "<script>window.alert('No telefon format salah,sila cuba lagi')</script>";
        header("refresh:1;url=$signup");
    }
    else{//submit to db
        mysqli_query($conn,$sql);
        echo"<script>window.alert('daftar berjaya, sila log masuk')</script>";
        header("refresh:1;url=$loginPage");
    }
    
?>