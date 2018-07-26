<table class="table table-bordered table-striped table-vcenter js-dataTable-full hema" id="hema">

<thead>

    <tr>
        <th class="text-center">No</th>
        <th>Nama Pasien</th>
        <th>Tanggal</th>
        <th class="d-none d-sm-table-cell">Kelainan Tulang/Syaraf</th>
        <th class="text-center">Kelainan Otot</th>
        <th class="text-center">Kelainan Jari Tangan</th>
        <th class="text-center">Kelainan Jari Kaki</th>
        <th class="text-center">Lainnya</th>

    </tr>
</thead>
<tbody>

    <tr>
        <?php
        $no = 0;
         foreach($extrim as $dataExtrim):
        $no++;

        ?>
      <td class="text-center"><?php echo $no;?></td>
      <td class="font-w600"><?php echo $dataExtrim->nmPasien;?></td>
      <td class="font-w600"><?php echo $dataExtrim->tgl;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataExtrim->Tulang;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataExtrim->Otot;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataExtrim->jTangan;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataExtrim->jKaki;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataExtrim->Lainnya;?></td>
  </tr>
<?php endforeach;?>
</tbody>
</table>
