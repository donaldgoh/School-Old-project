
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
        <form action="jualan.php" class="customselect" method="post">
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
        <th>Tarikh </th>
        <th>Id Jualan</th>
        <th>Ic Pelanggan</th>
        <th>No Plat</th>
        <th>Id Pekerja</th>
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
        $jualan=0;
        if(isset($_POST['submit'])){
        $bulan=$_POST['bulan'];
        $jualan=mysqli_query($conn,"SELECT * from jualan where month(tarikhJualan)=$bulan;");
        }
        
        if($jualan->num_rows> 0){
            while($row=$jualan->fetch_assoc()){
                echo"<tr><td>".$row["tarikhJualan"]."</td><td>".$row["idjualan"]."</td><td>".$row["icPelanggan"]."</td><td>".$row["noPlat"]."</td><td>".$row["idPekerja"]."</td></tr>";
            }
            echo "</table>";
            }
            else{
                echo "0 results";
            }

            $conn-> close();
        
    ?>

</table>
</body>
</html>
