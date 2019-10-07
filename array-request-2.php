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
            [ 'id' => 227, 'nama' => 'RENALDY', 'asal' => 'SURABAYA' ],
            [ 'id' => 423, 'nama' => 'FAKHRI', 'asal' => 'SURABAYA' ],
        ];
       
          if (isset($_GET['id'])){
            $id = $_GET['id'];
          }
          else
          {
              $id = "";
          }

          foreach ($input as $key => $value){
            if ($value['id'] == $id){
              $result = $key;
            }
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
        
            <form action=""></form>
                <input type="number">
                <button>CARI</button>
                <button>Reset</button>
            </form>
        
            <table>
                <tr>
                    <th>Id</th>
                    <th>Nama Siswa</th> 
                    <th>Umur</th>
                    <th>Link</th>
                </tr>
                <?php foreach ($input as $key => $value): ?>
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
