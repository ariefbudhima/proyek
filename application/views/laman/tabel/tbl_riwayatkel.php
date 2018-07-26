<table class="table table-bordered table-striped table-vcenter js-dataTable-full hema" >

<thead>

    <tr>
        <th class="text-center">No</th>
        <th>Nama Pasien</th>
        <th>Tanggal</th>
        <th class="d-none d-sm-table-cell">Jantung</th>
        <th class="text-center">Darah Tingi</th>
        <th class="text-center">Kencing Manis</th>
        <th class="text-center">Stroke</th>
        <th class="text-center">Paru/Asma/TBC</th>
        <th class="text-center">Kanker</th>
        <th class="text-center">Gangguan Jiwa</th>
        <th class="text-center">Ginjal</th>
        <th class="text-center">Saluran Cerna</th>
        <th class="text-center">Lainnya</th>

    </tr>
</thead>
<tbody>

    <tr>
        <?php
        $no = 0;
         foreach($riwayat as $dataRiwayat):
        $no++;

        ?>
      <td class="text-center"><?php echo $no;?></td>
      <td class="font-w600"><?php echo $dataRiwayat->nmPasien;?></td>
      <td class="font-w600"><?php echo $dataRiwayat->tgl;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataRiwayat->jantung;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataRiwayat->dTinggi;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataRiwayat->kmanis;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataRiwayat->stroke;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataRiwayat->paru;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataRiwayat->kanker;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataRiwayat->gjiwa;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataRiwayat->ginjal;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataRiwayat->scerna;?></td>
      <td class="text-center d-none d-sm-table-cell">
        <?php 
        $lainnya = $dataRiwayat->detLainnya;
            if($lainnya == ""){
                 echo "-";
            }
            else{echo $dataRiwayat->detLainnya;}
        ?>
    </td>
    </tr>
<?php endforeach;?>
</tbody>
</table>

