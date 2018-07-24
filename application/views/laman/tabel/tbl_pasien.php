
<table class="table table-bordered table-striped table-vcenter js-dataTable-full jual">
<thead>
    <tr>
        <th>Id Pasien</th>
        <th>Nama Pasien</th>
        <th>Umur</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
    </tr>
</thead>
<tbody>
    
    <?php 
      $no = 0;
      foreach ($pasien as $obj):
      $no++;

    ?>
      

    <tr>
      <td class="text-center"><?php echo $no;?></td>
      <td class="font-w600"><?php echo $obj->nmPasien;?></td>
      <td class="d-none d-sm-table-cell"><?php echo $obj->umur;?></td>
      <td class="d-none d-sm-table-cell"><?php echo $obj->gender;?></td>
      <td class="d-none d-sm-table-cell"><?php echo $obj->Alamat;?></td>
      <!-- <td class="text-center">
          <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#hps<?php echo $obj->kdPasien;?>">
              <i class="fa fa-eye"></i>
          </button>

      </td> -->
        <!-- <div class="modal fade" id="hps<?php echo $obj->kdPasien;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5>Detail <?php echo $obj->nmPasien;?></h5>
                    </div>
                    <div class="modal-footer">
                        <?php echo form_open('Trx/delJual');?>
                        <input type="hidden" name="id" value="<?php echo $obt->idFakturjual;?> ">
                        <button type="submit" class="btn btn-danger">YA</button>
                        <?php echo form_close();?>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">TIDAK</button>
                    </div>
                </div>
            </div>
        </div> -->
  </tr>
<?php endforeach;?>
</tbody>
</table>
