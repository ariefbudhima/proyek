<table class="table table-bordered table-striped table-vcenter js-dataTable-full hema" >

<thead>

    <tr>
        <th class="text-center">No</th>
        <th>Nama Pasien</th>
        <th>Tanggal</th>
        <th class="d-none d-sm-table-cell">Flu Like Syndrom</th>
        <th class="text-center">Keluhan Perut</th>
        <th class="text-center">Sesak</th>
        <th class="text-center">Haemoroid Grade I/II/III</th>
        <th class="text-center">Keluhan Kulit</th>
        <th class="text-center">Sedang Mengandung</th>
        <th class="text-center">Nyeri Dada</th>
        <th class="text-center">Otot, Tulang Syaraf</th>
        <th class="text-center">Hernia</th>
        <th class="text-center">Lainnya</th>


    </tr>
</thead>
<tbody>

    <tr>
        <?php
        $no = 0;
         foreach($keluh as $dataKeluhan):
        $no++;

        ?>
      <td class="text-center"><?php echo $no;?></td>
      <td class="font-w600"><?php echo $dataKeluhan->nmPasien;?></td>
      <td class="font-w600"><?php echo $dataKeluhan->Tgl;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataKeluhan->flu;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataKeluhan->perut;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataKeluhan->sesak;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataKeluhan->haemoroid;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataKeluhan->kulit;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataKeluhan->mengandung;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataKeluhan->nyeridada;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataKeluhan->otot;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataKeluhan->hernia;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataKeluhan->lainnya;?></td>
    </tr>
<?php endforeach;?>
</tbody>
</table>

