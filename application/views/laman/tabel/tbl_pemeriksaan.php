<table class="table table-bordered table-striped table-vcenter js-dataTable-full hema" >

<thead>

    <tr>
        <th class="text-center">No</th>
        <th>Nama Pasien</th>
        <th>Tanggal</th>
        <th class="d-none d-sm-table-cell">Tinggi</th>
        <th class="text-center">Berat</th>
        <th class="text-center">Nadi</th>
        <th class="text-center">Pernapasan</th>
        <th class="text-center">Tensi</th>
        <th class="text-center">Mata Sehari-hari</th>
        <th class="text-center">Pemeriksaan Mata</th>


    </tr>
</thead>
<tbody>

    <tr>
        <?php
        $no = 0;
         foreach($periksa as $dataPeriksa):
        $no++;

        ?>
      <td class="text-center"><?php echo $no;?></td>
      <td class="font-w600"><?php echo $dataPeriksa->nmPasien;?></td>
      <td class="font-w600"><?php echo $dataPeriksa->tgl;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataPeriksa->tinggi;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataPeriksa->berat;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataPeriksa->nadi;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataPeriksa->napas;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataPeriksa->tensi;?></td>
      <td class="d-none d-sm-table-cell">
        <p>Mata Kiri: <?php echo $dataPeriksa->hariankiri;?></p>
        <p>Mata Kanan:<?php echo $dataPeriksa->hariankanan;?></p>
      </td>
      <td class="d-none d-sm-table-cell">
        <p>Mata Kiri: <?php echo $dataPeriksa->periksakiri;?></p>
        <p>Mata Kanan: <?php echo $dataPeriksa->periksakanan;?></p>
      </td>
    </tr>
<?php endforeach;?>
</tbody>
</table>

