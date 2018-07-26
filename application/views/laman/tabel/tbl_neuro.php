<table class="table table-bordered table-striped table-vcenter js-dataTable-full hema" id="hema">

<thead>

    <tr>
        <th class="text-center">No</th>
        <th>Nama Pasien</th>
        <th>Tanggal</th>
        <th class="d-none d-sm-table-cell">Fisiologin</th>
        <th class="text-center">Patologis</th>
        <th class="text-center">Kekuatan Motor</th>
        <th class="text-center">Kelainan Syaraf Pusat</th>
        <th class="text-center">Kelainan Syaraf Tepi</th>
        <th class="text-center">Lidah</th>
        <th class="text-center">Lainnya</th>

    </tr>
</thead>
<tbody>

    <tr>
        <?php
        $no = 0;
         foreach($neuro as $dataNeuro):
        $no++;

        ?>
      <td class="text-center"><?php echo $no;?></td>
      <td class="font-w600"><?php echo $dataNeuro->nmPasien;?></td>
      <td class="font-w600"><?php echo $dataNeuro->tgl;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataNeuro->Fisiologi;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataNeuro->Patologis;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataNeuro->Motor;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataNeuro->Pusat;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataNeuro->Tepi;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataNeuro->Lidah;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataNeuro->Lainnya;?></td>
  </tr>
<?php endforeach;?>
</tbody>
</table>
