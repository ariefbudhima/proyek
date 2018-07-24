<table class="table table-bordered table-striped table-vcenter js-dataTable-full hema">

<thead>

    <tr>
        <th class="text-center">No</th>
        <th>Nama Pasien</th>
        <th>Tanggal</th>
        <th class="d-none d-sm-table-cell">VDRL/syphilis</th>
        <th class="text-center">HbAsg</th>
        <th class="text-center">Widal</th>

    </tr>
</thead>
<tbody>

    <tr>
        <?php
        $no = 0;
         foreach($sero as $dataSero):
        $no++;

        ?>
      <td class="text-center"><?php echo $no;?></td>
      <td class="font-w600"><?php echo $dataSero->nmPasien;?></td>
      <td class="font-w600"><?php echo $dataSero->Tgl;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataSero->vdrl;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataSero->hbasg;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataSero->widal;?></td>
  </tr>
<?php endforeach;?>
</tbody>
</table>

