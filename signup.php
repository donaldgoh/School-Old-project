<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign up</title>
    <link rel="stylesheet" href="css/register.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
  </head>

  <body class="background">
  <form class="loginForm" action="signupSubmit.php" method="post">
     <h2 class="logo1"> Violecar </h2>
     <h1>Selamat Datang Pengguna Baru</h1>

    <div class="txt">
      <input type="text" title="Id Pengguna" name="idPengguna" required>
      <span data-placeholder="Id Pengguna"></span>
    </div>

    <div class="txt">
      <input type="password" title="Kata Laluan" name="kataLaluan" required>
      <span data-placeholder="Kata Laluan"></span>
    </div>

    <div class="txt">
      <input type="text" title="Nama Pengguna" name="namaPengguna" required>
      <span data-placeholder="Nama Pengguna"></span>
    </div>

    <div class="txt">
      <input type="varchar" title="No Telefon" name="noTelefon" required>
      <span data-placeholder="No Telefon"></span>
    </div>

    <input type="submit" class="btn" value="daftar" title="tekan untuk daftar">
    </br>
    <div style="font-size:20px;">Sudah ada account?<a href="Login.php" style="color:indigo;">Log masuk sini</a></div>
    </form>
    
    <script type="text/javascript">
    $(".txt input").on("focus",function(){
      $(this).addClass("focus");
    });

    $(".txt input").on("blur",function(){
      if($(this).val() == "")
      $(this).removeClass("focus");
    });

    </script>


  </body>
</html>
