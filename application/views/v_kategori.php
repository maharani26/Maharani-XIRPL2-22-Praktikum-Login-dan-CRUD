
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      /* table{margin-left: 100px;} */
      tr:nth-child(ood):hover td {background-color: white;color: #8fc0a9;}
      tr:nth-child(even):hover td {background-color: #8fc0a9; color: white;}
    </style>
  </head>
  <body style="background-image: url(<?= base_url()?>assets/u.jpg); background-size:cover;">
    <!-- <div class="block-header">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="card">
        <div class="header">
          <div class="row clearfix">
            <div class="col-xs-12 col-sm-6"> -->
              <h1 style="text-align:left;">Kategori</h1>
            </div>
          </div>
          <div class="body">
            <div class="row" style="padding:200px; margin-left:130px">
              <a style="margin:35px; margin-left: 1px;" href="#tambah"
              class="btn btn-primary" data-toggle="modal">
              <span class="glyphicon glyphicon-plus"></span>Tambah</a>
              <table class="table table-hover table-striped">
                <tr>
                  <th style="color:black;">NO</th><th style="color:black;">ID BARANG</th><th style="color:black;">NAMA KATEGORI</th>
                </tr>

                <?php
                  $no=0;
                  foreach ($data_kategori as $dt_kat) {
                    $no++;
                    echo '<tr>
                          <td>'.$no.'</td>
                          <td>'.$dt_kat->id_kategori.'</td>
                          <td>'.$dt_kat->nama_kategori.'</td>
                          </tr>';
                  }
                 ?>
              </table>

    <?php if($this->session->flashdata('pesan')!=null):?>
    <div class="alert alert-danger">
    <?= $this->session->flashdata('pesan');?></div>
    <?php endif ?>

            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="tambah">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">

    <button type="button" class="close" data-dismiss="modal"><span aria-
    hidden="true">&times;</span><span class="sr-only">Close</span></button>

    <h4 class="modal-title">Tambah Kategori</h4>

    </div>
    <div class="modal-body">
    <form action="<?=base_url('index.php/kategori/simpan_kategori')?>"
    method="post">
    Nama Kategori
    <input type="text" name="nama_kategori" class="form-control"><br>
    <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
    </form>
    </div>
    <div class="modal-footer">

    <button type="button" class="btn btn-default" data-
    dismiss="modal">Close</button>

    </div>
    </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  </body>
</html
