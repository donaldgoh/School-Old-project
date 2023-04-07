
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/jualan.css">
    <title>Violecar</title>
</head>
<body>
    <div id="background"></div>
        <header>
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
    <br><br><br><br><br><br>
    <div class="contents">
        <p class="content1" style="font-size: 35px;color: black;">Sila Pilih Bulan:</p>
        <form action="pendapat.php" class="customselect" method="post">
            <div class="bulan">
                <select  name="bulan">
                    <option selected disabled value="0">bulan</option>
                    <option value="1">januari</option>
                    <option value="2">februari</option>
                    <option value="3">march</option>
                    <option value="4">april</option>
                    <option value="5">mei</option>
                </select>
                <input type="submit" name="submit" value="Get Selected Values" />
            </div>
        </form>
    </div>
    <br>
    <table>
        <tr>
        <th>Id Jualan</th>
        <th>Model Kereta</th>
        <th>harga</th>
        </tr>
    <?php
        #connect to server
        $conn = mysqli_connect("localhost","root","","violecar");
        #check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }else{
        }
        error_reporting(0);

        if(isset($_POST['submit'])){
        $bulan=$_POST['bulan'];
        $pendapat=mysqli_query($conn,"SELECT jualan.idJualan, kereta.modelKereta, kereta.harga, sum(harga) FROM kereta JOIN jualan
        on jualan.noPlat = kereta.noPlat where month(tarikhJualan)=$bulan; ");
        $jumlah=mysqli_query($conn,"SELECT sum(harga) FROM kereta JOIN jualan
        on jualan.noPlat = kereta.noPlat where month(tarikhJualan)=$bulan; ");
        }
               
        if($pendapat->num_rows> 0){
            while($row=$pendapat->fetch_assoc()){
                echo"<tr><td>".$row["idJualan"]."</td><td>".$row["modelKereta"]."</td><td>".$row["harga"]."</td></tr>";
            }
            echo "</table>";
            }
            else{
                echo "0 result";
            }

        if($jumlah->num_rows> 0){
            while($row=$jumlah->fetch_assoc()){
            echo"<p class='result'>"."Jumlah Pendapat = "."RM".$row["sum(harga)"]."</p>";
            }
            echo "</table>";
            }
            else{
            }
 
            $conn-> close();

    ?>

</table>
</body>
</html>
