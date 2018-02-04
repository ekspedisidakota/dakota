  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $headerTitle; ?>
        <small><?php echo $formTitle; ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><?php echo $headerTitle; ?></a></li>
        <li class="active"><?php echo $formTitle; ?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo $formTitle; ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                      <th>No</th>
                      <th>Resi</th>
                      <th>Tanggal</th>
                      <th>Pengirim</th>
                      <th>kota tujuan</th>
                      <th>layanan</th>
                      <th>Prioritas</th>
                      <th>Berat</th>
                      <th>Total Pembayaran</th>
                      <th>Pengirim</th>
                      <th>tipe pembayaran</th>
                      <th>
                          <div align="center">
                          <a href="<?php echo base_url('kiriman_paketc/manage_data_kiriman');?>" class="btn btn-default btn-xs"> <i class="fa fa-edit"></i> Tambah
                          </a>
                          </div>
                      </th>
                  </tr>
                  </thead>
                  <tbody>                            
                      <?php
                        $no=1;
                        if(isset($data_mitra)){
                           foreach($data_mitra as $row){
                      ?>
                      <tr>
                       <td><?php echo $no++; ?></td>
                       <td><?php echo $row->nama; ?></td>
                       <td><?php echo $row->personal_hp; ?></td>
                       <td><?php echo $row->fax; ?></td>
                       <td>
                          <div align="center">
                            <a  data-toggle="modal" data-target="#modal-ubah<?php echo $row->mitraid; ?>" class="btn btn-default btn-xs"> <i class="fa fa-edit"></i> Ubah
                          </a>
                          <a href="<?php echo base_url('batuc/proses_hapus_batu/'.$row->mitraid);?>" class="btn btn-default btn-xs"> <i class="fa fa-trash-o"></i> Hapus
                          </a>
                          </div>
                       </td>
                      </tr>
                      <?php }
                        }
                      ?>
                  </tbody>
              </table>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->