<!DOCTYPE html>
 <html>

  <head>
    <meta charset="utf-8">
    <title>INFORMATICANS</title>
    <script type="text/javascript" src="nyobe.js"></script>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
   <header>
     <h1>INFORM<span>ATICANS</span></h1>
     <p>
       Membahas berbagai mata kuliah Teknik Informatika
     </p>
     <nav>
       <ul>
         <li><a href="#">Beranda</a></li>
         <li><a href="#">Algoritma dan Pemrograman</a></li>
         <li><a href="#">Pengembangan Web</a></li>
         <li><a href="#">Desain Grafis</a></li>
         <li><a href="#">Jaringan Komputer</a></li>
       </ul>
     </nav>
   </header>

  <div class="main">
    <?php
      $countera="counter_berhasil.txt";
      $counterb="counter_gagal.txt";

      if (!file_exists($countera)){
        fopen($countera,"w");
      }

      if (!file_exists($counterb)){
        fopen($counterb,"w");
      }

      $counterc=fopen($countera,"r");
      $counterd=fopen($counterb,"r");

      $counter1=fread($counterc,4);
      $counter2=fread($counterd,4);

      session_start();
      if (isset($_POST['Login'])) {
        $nama =$_POST['name'];
        $password=$_POST['psw'];
        if ($nama=="Nurul" && $password =="1234"){
          $_SESSION['login'] = $nama;
          echo "Selamat Datang <b>$nama</b><br /><br />";
          $counter1++;
          echo "<h2>Klik <a href='session02.php'>di sini(session02.php)</a> untuk menuju ke halaman pemeriksaan session";
        }
        else {
          echo "Login tidak berhasil<br /><br />";
          $counter2++;
          echo "<a href='nunun.php'>Kembali</a>";
        }
      }

      $fp=fopen("counter_berhasil.txt", "w");
      fwrite($fp, $counter1);
      fclose($fp);

      $fp=fopen("counter_gagal.txt", "w");
      fwrite($fp, $counter2);
      fclose($fp);
      ?>

     <footer>
        <p>
           <i>Version <span>1.0</span></i>
        </p>

        <p>
           Copyright <span>de_coder</span>
        </p>

        <p>
           2017
        </p>
     </footer>
    </div>
   </body>
 </html>
