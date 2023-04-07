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
    
    $nama=$_POST['namaPelanggan'];
    $noR=$_POST['noRumah'];
    $alm=$_POST['alamat'];
    $pk=$_POST['poskod'];
    $ng=$_POST['negeri'];
    $ic=$_POST['icPelanggan'];
    $ph=$_POST['noTelefonPelanggan'];

    $nxt='daftar1.php';
    $ori='daftar.php';
    $sql="insert into alamat(namaPelanggan,alamat,poskod,negeri,noRumah) VALUES('$nama','$alm','$pk','$ng','$noR')";
    $sql2="insert into pelanggan(icPelanggan,namaPelanggan,noTelefonPelanggan) VALUES('$ic','$nama','$ph')";

    $namaResult = mysqli_query($conn,"SELECT namaPelanggan from alamat WHERE namaPelanggan='$nama'");
    $icResult = mysqli_query($conn,"SELECT icPelanggan from pelanggan WHERE icPelanggan='$ic'");
    $namaResult2 = mysqli_query($conn,"SELECT namaPelanggan from pelanggan WHERE namaPelanggan='$nama'");


    if(strlen($pk)>5 or is_numeric($pk)==false){//check poskod
        echo "<script>window.alert('Poskod format salah,sila cuba lagi')</script>";
        header("refresh:1;url=$ori");
    }
    elseif(strlen($ph)>11 or strlen($ph)<10 or $ph[1]!= 1 or $ph[0]!= 0 ){//check ph format
        echo "<script>window.alert('No telefon format salah,sila cuba lagi')</script>";
        header("refresh:1;url=$ori");
    }
    elseif($namaResult->num_rows > 0 and $namaResult2->num_rows > 0 and $icResult->num_rows > 0){//check pelanggan wujud atau tidak
        header("refresh:1;url=$ori");
        $_SESSION['namaPelanggan']=$nama;
    }
    elseif($namaResult->num_rows==0 and $namaResult2->num_rows==0 and $icResult->num_rows==0){//submit to db
        mysqli_query($conn,$sql);
        mysqli_query($conn,$sql2);
        header("refresh:1;url=$ori");
        $_SESSION['namaPelanggan']=$nama;
    }
    else{
        echo "<script>window.alert('Ic pelanggan atau nama pelanggan adalah salah sila cuba lagi')</script>";
        header("refresh:1;url=$ori");
    }
    
?>