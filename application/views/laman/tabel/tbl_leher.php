<table class="table table-bordered table-striped table-vcenter js-dataTable-full hema" id="hema">

<thead>

    <tr>
        <th class="text-center">No</th>
        <th>Nama Pasien</th>
        <th>Tanggal</th>
        <th class="d-none d-sm-table-cell">Leher</th>

    </tr>
</thead>
<tbody>

    <tr>
        <?php
        $no = 0;
         foreach($leher as $dataLeher):
        $no++;

        ?>
      <td class="text-center"><?php echo $no;?></td>
      <td class="font-w600"><?php echo $dataLeher->nmPasien;?></td>
      <td class="font-w600"><?php echo $dataLeher->tgl;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataLeher->leher;?></td>
  </tr>
<?php endforeach;?>
</tbody>
</table>
