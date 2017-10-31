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
         <li><a href="index.html">Beranda</a></li>
         <li><a href="#">Algoritma dan Pemrograman</a></li>
         <li><a href="#">Pengembangan Web</a></li>
         <li><a href="#">Desain Grafis</a></li>
         <li><a href="#">Jaringan Komputer</a></li>
       </ul>
     </nav>
   </header>

  <div class="main">

    <form action="" method="post">
      <p>Alamat email: <input type="text" name="emailNya" /></p>
      <p><input type="submit" value="cek"/></p>

    <?php
    if (isset($_POST['emailNya']) ) {
      $emailNya =$_POST['emailNya'];

      if (!filter_var($emailNya, FILTER_VALIDATE_EMAIL) === false) {
          echo("$emailNya adalah alamat email yang valid");
      } else {
          echo("$emailNya adalah alamat email yang tidak valid");
      }

  }


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
