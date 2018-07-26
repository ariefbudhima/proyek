<table class="table table-bordered table-striped table-vcenter js-dataTable-full hema" id="hema">

<thead>

    <tr>
        <th class="text-center">No</th>
        <th>Nama Pasien</th>
        <th>Tanggal</th>
        <th class="d-none d-sm-table-cell">Bentuk</th>
        <th class="text-center">Expansi</th>
        <th class="text-center">Palpasi</th>
        <th class="text-center">Perkusi</th>
        <th class="text-center">Auskultasi</th>
        <th class="text-center">Lainnya</th>

    </tr>
</thead>
<tbody>

    <tr>
        <?php
        $no = 0;
         foreach($thorax as $dataThorax):
        $no++;

        ?>
      <td class="text-center"><?php echo $no;?></td>
      <td class="font-w600"><?php echo $dataThorax->nmPasien;?></td>
      <td class="font-w600"><?php echo $dataThorax->tgl;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataThorax->Bentuk;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataThorax->Ekspansi;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataThorax->Palpasi;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataThorax->Perkusi;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataThorax->Auskultasi;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataThorax->Lain;?></td>
  </tr>
<?php endforeach;?>
</tbody>
</table>
