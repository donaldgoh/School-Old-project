<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/styleLogin.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js">

    </script>
  </head>

  <body class="background">
  <form class="loginForm" action="loginSubmit.php" method="post">
    <h1>Selamat Datang Ke</h1>
    <h2 class="logo1"> Violecar </h2>

    <div class="txt">
      <input type="text" title="Id Pengguna" name="idPengguna" required>
      <span data-placeholder="Id Pengguna"></span>
    </div>

    <div class="txt">
      <input type="password" title="Kata Laluan" name="kataLaluan" required>
      <span data-placeholder="Kata Laluan"></span>
    </div>

    <input type="submit" class="btn" value="log masuk" title="tekan untuk log masuk">
    </br>
    <div style="font-size:20px;">tidak ada account?<a href="signup.php" style="color:indigo;">Daftar sini</a></div>
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
