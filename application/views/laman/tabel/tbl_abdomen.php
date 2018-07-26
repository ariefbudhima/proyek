<table class="table table-bordered table-striped table-vcenter js-dataTable-full hema" id="hema">

<thead>

    <tr>
        <th class="text-center">No</th>
        <th>Nama Pasien</th>
        <th>Tanggal</th>
        <th class="d-none d-sm-table-cell">Bentuk</th>
        <th class="text-center">Palpasi/Perkusi</th>
        <th class="text-center">Hati</th>
        <th class="text-center">Limpa</th>
        <th class="text-center">Ginjal : Tes Ketok</th>
        <th class="text-center">Rectal</th>
        <th class="text-center">Hernia</th>
        <th class="text-center">Haemoroid</th>
        <th class="text-center">Lainnya</th>

    </tr>
</thead>
<tbody>

    <tr>
        <?php
        $no = 0;
         foreach($abdomen as $dataAbdomen):
        $no++;

        ?>
      <td class="text-center"><?php echo $no;?></td>
      <td class="font-w600"><?php echo $dataAbdomen->nmPasien;?></td>
      <td class="font-w600"><?php echo $dataAbdomen->tgl;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataAbdomen->Bentuk;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataAbdomen->Palpasi;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataAbdomen->Hati;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataAbdomen->Limpa;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataAbdomen->Ginjal;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataAbdomen->Rectal;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataAbdomen->Hernia;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataAbdomen->Haemoroid;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataAbdomen->Lainnya;?></td>
  </tr>
<?php endforeach;?>
</tbody>
</table>
