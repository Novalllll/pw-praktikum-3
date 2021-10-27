<?php 
  $datas = [
    [
      'nama' => 'Gula',
      'berat(kg)' => 0.7,
      'stok' => 15
    ],
    [
      'nama' => 'Telur',
      'berat(kg)' => 1,
      'stok' => 50
    ],
    [
      'nama' => 'Kacang Ijo',
      'berat(kg)' => 0.5,
      'stok' => 0
    ],
    [
      'nama' => 'Kacang Tanah',
      'berat(kg)' => 0.5,
      'stok' => 10
    ],
    [
      'nama' => 'Tepung Terigu',
      'berat(kg)' => 1,
      'stok' => 0
    ],
  ];
?>

<!DOCTYPE html>
  <head>
    <link rel="stylesheet" href="style.css">
  </head>
  
  <body>
    <h1>Tabel Stok Warung Ka Joy</h1>
    
    <table id="table_barang">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Barang</th>
          <th>Berat(Kg)</th>
          <th>Berat(gr)</th>
          <th>Berat(Mg)</th>
          <th>Stok</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($datas as $index => $data) { ?>
        <tr>
          <td><?= $index + 1?>.</td>
          <td><?= $data['nama'] ?></td>
          <td><?= $data['berat(kg)'] ?></td>
          <td><?= $data['berat(kg)']*1000 ?></td>
          <td><?= $data['berat(kg)']*1000000 ?></td>
          <td class="<?= $data['stok'] == 0 ? 'zeroValue' : '' ?>"><?= $data['stok'] == 0 ? 'Habis' : $data['stok'] ?></td>
        </tr>
        <?php } 
        ?>
      </tbody>
    </table>
    <footer>
    </footer>
  </body>
</html>