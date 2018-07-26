<table class="table table-bordered table-striped table-vcenter js-dataTable-full hema" >

<thead>

    <tr>
        <th class="text-center">No</th>
        <th>Nama Pasien</th>
        <th>Tanggal</th>
        <th class="d-none d-sm-table-cell">Olahraga (Kali/hari)</th>
        <th class="text-center">Meroko (Batang/hari)k</th>
        <th class="text-center">Minum Kopi (Gelas/hari)</th>
        <th class="text-center">Minum Alkohol (Botol/hari)</th>

    </tr>
</thead>
<tbody>

    <tr>
        <?php
        $no = 0;
         foreach($biasa as $dataKebiasaan):
        $no++;

        ?>
      <td class="text-center"><?php echo $no;?></td>
      <td class="font-w600"><?php echo $dataKebiasaan->nmPasien;?></td>
      <td class="font-w600"><?php echo $dataKebiasaan->Tgl;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataKebiasaan->olahraga;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataKebiasaan->rokok;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataKebiasaan->kopi;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataKebiasaan->alkohol;?></td>
    </tr>
<?php endforeach;?>
</tbody>
</table>

