<table class="table table-bordered table-striped table-vcenter js-dataTable-full hema" >

<thead>

    <tr>
        <th class="text-center">No</th>
        <th>Nama Pasien</th>
        <th>Tanggal</th>
        <th class="d-none d-sm-table-cell">Hepatitis</th>
        <th class="text-center">TBC</th>
        <th class="text-center">Tahun TBC</th>
        <th class="text-center">Hipertensi</th>
        <th class="text-center">Diabetes Melitus</th>
        <th class="text-center">Alergi</th>
        <th class="text-center">Riwayat Rawat Operasi</th>
        <th class="text-center">Riwayat Penyakit Jantung</th>
        <th class="text-center">Pengobatan Rawat Inap</th>
        <th class="text-center">Patah Tulang</th>
        <th class="text-center">Obat Yang Rutin Dikonsumsi</th>

    </tr>
</thead>
<tbody>

    <tr>
        <?php
        $no = 0;
         foreach($anam as $dataAnam):
        $no++;

        ?>
      <td class="text-center"><?php echo $no;?></td>
      <td class="font-w600"><?php echo $dataAnam->nmPasien;?></td>
      <td class="font-w600"><?php echo $dataAnam->tgl;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataAnam->Hepatitis;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataAnam->TBC;?></td>
      <td class="text-center d-none d-sm-table-cell">
        <?php 
        $tahun = $dataAnam->tbcTahun;
            if($tahun == 0){
                 echo "-";
            }
            else{echo $dataAnam->tbcTahun;}
        ?>
    </td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataAnam->Hipertensi;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataAnam->Diabetes;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataAnam->Alergi;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataAnam->Operasi;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataAnam->Jantung;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataAnam->Inap;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataAnam->PTulang;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataAnam->ObatRutin;?></td>
  </tr>
<?php endforeach;?>
</tbody>
</table>

