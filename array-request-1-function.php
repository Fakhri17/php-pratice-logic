<?php include "functions.php" ?>
<html>
    <head>
    <style>

    body{
		margin:20px 0px 0px 20px;
	}
    table, th, td {
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
          if (isset($_GET['id'])):
            $cariID = $_GET['id'];
            $result = findSame($input, 'id', $cariID);  
          ?>


           <p>Profil siswa</p>
          <p>id: <?php echo $result['id'] ?> </p>
          <p>nama: <?php echo $result['nama'] ?> </p>
          <p>asal: <?php echo $result['asal'] ?> </p>
        
   
        <button onclick="window.history.back()">Kembali</button>
    <?php
    else: 
    ?>
        <table >
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
