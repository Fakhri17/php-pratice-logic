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
   
    </style>
        <body>
    
    <?php 
        $input = [
            [ 'id' => 122, 'nama' => 'RAMA', 'asal' => 'SURABAYA' ],
            [ 'id' => 127, 'nama' => 'RENALDY', 'asal' => 'SURABAYA' ],
            [ 'id' => 427, 'nama' => 'FAKHRI', 'asal' => 'SURABAYA' ],
        ];

        echo '<pre>';
        var_dump($_GET);
        echo '</pre>';
       
        if (isset($_GET['id'])) {
          if ($_GET['id'] != "" && isset($_GET['submit'])){
            // jika ada id dan submit
            $id = $_GET['id'];
            $resultArray = findContains($input, 'id', $id);
          } else {
            // jika ada id dan reset
            $resultArray = $input;
          }
        } else {
          // jika tidak ada parameter
          $resultArray = $input;
        }
        
        ?>

        <?php
        if (isset($result)):
          echo "Profil siswa id: ".$input[$result]['id']."<br>"."<br>";
          echo "- Id: ".$input[$result]['id']."<br>"."<br>";
          echo "- Nama: ".$input[$result]['nama']."<br>"."<br>";
          echo "- Asal: ".$input[$result]['asal']."<br>"."<br>";
      
        ?>
        <button onclick="window.history.back()">Kembali</button>
          <?php
            else: 
          ?>
        
            <form method="get">
                <input type="number" name="id" placeholder="id siswa">
                <button type="submit" name="submit">CARI</button>
                <button type="submit" name="reset">Reset</button>
            </form>
        
            <table>
                <tr>
                    <th>Id</th>
                    <th>Nama Siswa</th> 
                    <th>Umur</th>
                    <th>Link</th>
                </tr>
                <?php foreach ($resultArray as $key => $value): ?>
                <tr>
                    <td><?php echo $value['id'] ?></td>
                    <td><?php echo $value['nama'] ?></td>
                    <td><?php echo $value['asal'] ?></td>
                    <td><a href="?id=<?php echo $value['id'] ?>">Profil</a></td>
                </tr>
                <?php endforeach ?>
          </table>

            <?php endif; ?>


            
        
        
        </body>
    </head>
</html>
