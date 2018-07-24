<table class="table table-bordered table-striped table-vcenter js-dataTable-full hema" id="hema">

<thead>

    <tr>
        <th class="text-center">No</th>
        <th>Nama Pasien</th>
        <th>Tanggal</th>
        <th class="d-none d-sm-table-cell">Warna</th>
        <th class="text-center">Kejernihan</th>
        <th class="text-center">BJ</th>
        <th class="text-center">pH</th>
        <th class="text-center">Protein</th>
        <th class="text-center">Glukosa</th>
        <th class="text-center">Keton</th>
        <th class="text-center">Bilirubin</th>
        <th class="text-center">Urobilinogen</th>
        <th class="text-center">Nitrit</th>
        <th class="text-center">Darah</th>
        <th class="text-center">Leukosit</th>
        <th class="text-center">Sedimen Eritrotsit</th>
        <th class="text-center">Sedimen Leukosit</th>
        <th class="text-center">Sedimen Epitel</th>
        <th class="text-center">Kristal</th>

    </tr>
</thead>
<tbody>

    <tr>
        <?php
        $no = 0;
         foreach($urin as $dataUrin):
        $no++;

        ?>
      <td class="text-center"><?php echo $no;?></td>
      <td class="font-w600"><?php echo $dataUrin->nmPasien;?></td>
      <td class="font-w600"><?php echo $dataUrin->Tgl;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataUrin->warna;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataUrin->jernih;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataUrin->bj;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataUrin->ph;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataUrin->protein;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataUrin->glukosa;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataUrin->keton;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataUrin->bilirubin;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataUrin->urobilinogen;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataUrin->nitrit;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataUrin->darah;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataUrin->leukosit;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataUrin->sEritrosit;?></td>
      <td class="d-none d-sm-table-cell text-center"><?php echo $dataUrin->sLeukosit;?></td>
      <td class="d-none d-sm-table-cell text-center"><?php echo $dataUrin->sEpitel;?></td>
      <td class="d-none d-sm-table-cell text-center"><?php echo $dataUrin->kristal;?></td>
  </tr>
<?php endforeach;?>
</tbody>
</table>

