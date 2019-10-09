<?php include "functions.php" ?>
<html>
    <head>
    <style>

    body{
		margin:20px 0px 0px 20px;
	}
    table, th, td {
        margin-bottom : 20px;
        margin-top : 25px;
        border: 1px solid black;
        border-collapse: collapse;
        padding : 10px;
        
    }
    .button {
      padding: 5px 10px;
      background: blueviolet;
      color: white;
      text-align: center;
      border: none;
      display: inline-block;
    }
   
    </style>
        <body>
    
    <?php 
        $input = [
            [ 'id' => 122, 'nama' => 'RAMA', 'asal' => 'SURABAYA' ],
            [ 'id' => 127, 'nama' => 'RENALDY', 'asal' => 'SURABAYA' ],
            [ 'id' => 427, 'nama' => 'FAKHRI', 'asal' => 'SURABAYA' ],
        ];

        /*echo '<pre>';
        var_dump($_GET);
        echo '</pre>';*/

        
       
        if (isset($_POST['cari'])) {
          if ($_POST['cari'] != ""){
            // jika ada id dan submit
            $cari = $_POST['cari'];
            $resultArray = findContains($input, 'id', $cari);
          } else {
            // jika ada id dan tidak ada submit
            $resultArray = $input;
          }
        } else {
          // jika tidak ada parameter
          $resultArray = $input;
        }
        
        ?>

        <?php 
          if (isset($_POST['id'])):
            $id = $_POST['id'];
            $result = findSame($input, 'id', $id);
        ?>
          <p>Profil siswa</p>
          <p>id: <?php echo $result['id'] ?> </p>
          <p>nama: <?php echo $result['nama'] ?> </p>
          <p>asal: <?php echo $result['asal'] ?> </p>
      
        <button onclick="window.history.back()">Kembali</button>
          <?php
            else: 
          ?>
          
        
            <form id="my-form" method="post">
                <input type="number" name="cari" placeholder="id siswa">
                <button class="button" type="submit" name="submit">CARI</button>
                <button class="button" onclick="reset()">Reset</button>
            </form>
        
            <table>
                <tr>
                    <th>Id</th>
                    <th>Nama Siswa</th> 
                    <th>Asal</th>
                    <th>Link</th>
                </tr>
                <?php foreach ($resultArray as $key => $value): ?>
                <tr>
                    <td><?php echo $value['id'] ?></td>
                    <td><?php echo $value['nama'] ?></td>
                    <td><?php echo $value['asal'] ?></td>
                    <td><a href="?id=<?php echo $value['id'] ?>">Profil</a></td>
                </tr>
                <?php
                  endforeach; 
                ?>
            <table>
        <?php endif ?>    
        
          <script>
            function reset() {
              var form = document.getElementById('my-form');
              var formButton = document.querySelector('#my-form button');
              form.reset(); // rest form
              formButton.click(); // click submit button
            }
          </script>
        </body>
    </head>
</html>

