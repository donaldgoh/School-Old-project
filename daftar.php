c<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/daftar.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <title>Violecar</title>
</head>
<body>
    <div id="background"></div>
        <header>
            <!-- <a href="#" class="logo">Violecar</a> -->
            <h1 class="logo">Violecar</h1>
            <input type="checkbox" id="nav-toggle" class="nav-toggle">
            <nav>
                <ul>
                    <li><a href="jualan.php">jualan</a></li>
                    <li><a href="pendapat.php">pendapat</a></li>
                    <li><a href="daftar.php">daftar</a></li>
                    <li><a href="import.php">import</a></li>
                    <li><a href="logout.php">log keluar</a></li>
                </ul>
            </nav>

            <label for="nav-toggle" class="nav-toggle-label">
                <span></span>
            </label>
        </header>
        <br><br> <br><br> <br><br>

        <div class="contents">
        <form class="loginForm" action="daftarSubmit.php" method="post">

        <h1>Sila masukan info pelanggan</h1> 
        <div class="txt">
            <input type="text" title="nama Pelanggan" name="namaPelanggan" required>
            <span data-placeholder="nama Pelanggan"></span>
        </div>

        <div class="txt">
            <input type="text" title="no Telefon Pelanggan" name="noTelefonPelanggan" required>
            <span data-placeholder="no Telefon Pelanggan"></span>
        </div>

        <div class="txt">
            <input type="text" title="ic Pelanggan" name="icPelanggan" required>
            <span data-placeholder="ic Pelanggan"></span>
        </div>

        <div class="txt">
            <input type="text" title="no rumah" name="noRumah" required>
            <span data-placeholder="no rumah"></span>
        </div>

        <div class="txt">
            <input type="text" title="alamat" name="alamat" required>
            <span data-placeholder="alamat"></span>
        </div>

        <div class="txt">
            <input type="text" title="poskod" name="poskod" required>
            <span data-placeholder="poskod"></span>
        </div>

        <div class="txt">
            <input type="text" title="negeri" name="negeri" required>
            <span data-placeholder="negeri"></span>
        </div>

        <input type="submit" class="btn" value="terus" title="input info kereta">
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

            
        </div>
</body>
</html>