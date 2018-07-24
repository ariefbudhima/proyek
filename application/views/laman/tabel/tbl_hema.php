<table class="table table-bordered table-striped table-vcenter js-dataTable-full hema" id="hema">
<thead>
    <tr>
        <th class="text-center">No</th>
        <th>Nama Pasien</th>
        <th>Tanggal</th>
        <th class="d-none d-sm-table-cell">Hemoglobin</th>
        <th class="text-center">Eritrosit</th>
        <th class="text-center">Hematokrit</th>
        <th class="text-center">Leukosit</th>
        <th class="text-center">Laju Endap Darah</th>
        <th class="text-center">Trombosit</th>
        <th class="text-center">MCV</th>
        <th class="text-center">MCH</th>
        <th class="text-center">Basofil</th>
        <th class="text-center">Eosinofil</th>
        <th class="text-center">Batang</th>
        <th class="text-center">Segmen</th>
        <th class="text-center">Limposit</th>
        <th class="text-center">Monosit</th>

    </tr>
</thead>
<tbody>
    <tr>
        <?php
        $no = 0;
         foreach($hema as $dataHema):
        $no++;

        ?>
      <td class="text-center"><?php echo $no;?></td>
      <td class="font-w600"><?php echo $dataHema->nmPasien;?></td>
      <td class="font-w600"><?php echo $dataHema->Tgl;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataHema->hemoglobin;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataHema->eritrosit;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataHema->hematokrit;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataHema->leukosit;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataHema->laju;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataHema->trombosit;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataHema->mcv;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataHema->mch;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataHema->mchc;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataHema->eosinofil;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataHema->batang;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataHema->segmen;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataHema->limposit;?></td>
      <td class="d-none d-sm-table-cell text-center"><?php echo $dataHema->monosit;?></td>
  </tr>
<?php endforeach;?>
</tbody>
</table>

