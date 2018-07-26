<table class="table table-bordered table-striped table-vcenter js-dataTable-full hema" >

<thead>

    <tr>
        <th class="text-center">No</th>
        <th>Nama Pasien</th>
        <th>Tanggal</th>
        <th class="d-none d-sm-table-cell">Kesan</th>
        <th class="text-center">BMI</th>
        <th class="text-center">Kulit</th>
        <th class="text-center">Mata</th>


    </tr>
</thead>
<tbody>

    <tr>
        <?php
        $no = 0;
         foreach($umum as $dataUmum):
        $no++;

        ?>
      <td class="text-center"><?php echo $no;?></td>
      <td class="font-w600"><?php echo $dataUmum->nmPasien;?></td>
      <td class="font-w600"><?php echo $dataUmum->Tgl;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataUmum->kesan;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataUmum->bmi;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataUmum->kulit;?></td>
      <td class="text-center d-none d-sm-table-cell"><?php echo $dataUmum->mata;?></td>
    </tr>
<?php endforeach;?>
</tbody>
</table>

