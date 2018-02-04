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
                          <a  data-toggle="modal" data-target="#modal-default" class="btn btn-primary btn-xs"> <i class="fa fa-plus"></i> Tambah
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

  <div class="modal fade bs-example-modal-lg" id="modal-default">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Data Mitra</h4>
        </div>
        <div class="modal-body">
            <form class="form-horizontal" role="form" method="post" action="<?php echo base_url('mitrac/proses_simpan_mitra')?>">
              <input type="hidden" name="create_date" value="<?php echo date('Y-m-d h:m:s'); ?>"></input>
              <input type="hidden" name="update_date" value="<?php echo date('Y-m-d h:m:s'); ?>"></input>
              <input type="hidden" name="create_userid" value="<?php echo $this->session->userdata('ID') ?>"></input>
              <input type="hidden" name="update_userid" value="<?php echo $this->session->userdata('ID') ?>"></input>
              <input type="hidden" name="negaraid" value="<?php echo $this->session->userdata('ID') ?>"></input>
              <input type="hidden" name="propinsiid" value="<?php echo $this->session->userdata('ID') ?>"></input>
              <input type="hidden" name="propinsikotaid" value="<?php echo $this->session->userdata('ID') ?>"></input>
              <input type="hidden" name="personal_email" value="<?php echo $this->session->userdata('ID') ?>"></input>
              <input type="hidden" name="keterangan" value="<?php echo $this->session->userdata('ID') ?>"></input>
              <input type="hidden" name="personal_nama" value="<?php echo $this->session->userdata('ID') ?>"></input>
              <input type="hidden" name="telp" value="<?php echo $this->session->userdata('ID') ?>"></input>
              <div class="box-body ">
                <div class="col-sm-6">
                  <h4>Pengirim</h4><hr>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Pengirim</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="nama">
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Alamat</label>
                    <div class="col-sm-9">
                      <textarea class="form-control" name="alamat">
                        
                      </textarea>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Telepon</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputEmail3" name="kodepos" placeholder="">
                    </div>
                  </div>
                </div>


                  <div class="col-sm-6">
                  <h4>Data Penerima</h4><hr>

                      <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Pengirim</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="nama">
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Alamat</label>
                    <div class="col-sm-9">
                      <textarea class="form-control" name="alamat">
                        
                      </textarea>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Telepon</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputEmail3" name="kodepos" placeholder="">
                    </div>
                  </div>

                                 
                </div>

                <div class="col-sm-6">
                  <h4>Data Pengirim</h4><hr>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Jenis Pengirim</label>
                    <div class="col-sm-9">
                      <select class="form-control"  name="kota" id="kota">
                      <option value="">Pilih</option>
                    </select>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Tanggal Transaksi</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="inputEmail3" name="kodepos" placeholder="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">No Resi</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="inputEmail3" name="fax" placeholder="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Tujuan</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="inputEmail3" name="fax" placeholder="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">layanan</label>
                    <div class="col-sm-9">
                      <select class="form-control" id="inputEmail3" >
                        <option value="">pilih layanan</option>
                      </select>
                    </div>
                  </div>

                   <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Prioritas</label>
                    <div class="col-sm-9">
                      <select class="form-control" id="inputEmail3" >
                        <option value="">pilih </option>
                      </select>
                    </div>
                  </div>

                    <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Satuan Tarif</label>
                    <div class="col-sm-9">
                      <select class="form-control" id="inputEmail3" >
                        <option value="">pilih </option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Nilai Barang</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="inputEmail3" name="fax" placeholder="">
                    </div>
                  </div>

                   <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Gunakan Asuransi</label>
                    <div class="col-sm-9">
                      <select class="form-control" id="inputEmail3" >
                        <option value="">pilih </option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6">
                  <h4>Estimasi Lama Pengiriman</h4><hr>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Biaya Pengiriman</label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="" name="harimin">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Biaya Packing</label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="" name="harimax">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Sub total</label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="" name="harimax">
                    </div>
                  </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Diskon</label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="" name="harimax">
                    </div>
                  </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Total</label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="" name="harimax">
                    </div>
                  </div>
                </div>                
              </div>
              <!-- /.box-body -->
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Kembali</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
          </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

 <?php
    $no=1;
    if(isset($data_mitra)){
       foreach($data_mitra as $row){
  ?>

  <div class="modal fade bs-example-modal-lg" id="modal-ubah<?php echo $row->mitraid; ?>">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Ubah Data Pelanggan</h4>
        </div>
        <div class="modal-body">
            <form class="form-horizontal" role="form" method="post" action="<?php echo base_url('pelangganc/proses_ubah_pelanggan')?>">
              <input type="hidden" name="update_date" value="<?php echo date('Y-m-d h:m:s'); ?>"></input>
              <input type="hidden" name="update_userid" value="<?php echo $this->session->userdata('ID') ?>"></input>
              <input type="hidden" name="tipeid" value="<?php echo $this->session->userdata('ID') ?>"></input>
              <input type="hidden" name="negaraid" value="<?php echo $this->session->userdata('ID') ?>"></input>
              <input type="hidden" name="propinsiid" value="<?php echo $this->session->userdata('ID') ?>"></input>
              <input type="hidden" name="propinsikotaid" value="<?php echo $this->session->userdata('ID') ?>"></input>
              <input type="hidden" name="personal_email" value="<?php echo $this->session->userdata('ID') ?>"></input>
              <input type="hidden" name="keterangan" value="<?php echo $this->session->userdata('ID') ?>"></input>
              <input type="hidden" name="personal_nama" value="<?php echo $this->session->userdata('ID') ?>"></input>
              <input type="hidden" name="telp" value="<?php echo $this->session->userdata('ID') ?>"></input>
              <div class="box-body ">
                <div class="col-sm-6">
                  <h4>Address Information</h4><hr>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Nama</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputEmail3" name="nama" value="<?php echo $row->nama; ?>">
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Alamat</label>
                    <div class="col-sm-9">
                      <textarea class="form-control" name="alamat" value="<?php echo $row->alamat; ?>">
                      </textarea>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Provinsi</label>
                    <div class="col-sm-9">
                       <select class="form-control"  name="propinsi" id="propinsi">
                        <option value="">Pilih</option>
                        
                        <?php
                        foreach($data_prov as $data){ 
                          echo "<option value='".$data->propinsiid."'>".$data->nama."</option>";
                        }
                        ?>
                      </select>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Kota</label>
                    <div class="col-sm-9">
                      <select class="form-control"  name="kota" id="kota">
                      <option value="">Pilih</option>
                    </select>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Kode Pos</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputEmail3" name="kodepos" value="<?php echo $row->kodepos; ?>">
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Kategori</label>
                    <div class="col-sm-9">
                      <select class="form-control" id="inputEmail3" >
                        <option value="">Member Biasa</option>
                      </select>
                    </div>
                  </div>
                </div>


                <div class="col-sm-6">
                  <h4>Contact Person</h4><hr>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">No Telpon</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="inputEmail3" name="personal_hp" value="<?php echo $row->personal_hp; ?>">
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">No Fax</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="inputEmail3" name="fax" value="<?php echo $row->fax; ?>">
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="inputEmail3" name="email" value="<?php echo $row->email; ?>">
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Website</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="inputEmail3" name="website" value="<?php echo $row->website; ?>">
                    </div>
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Kembali</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
          </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
  <?php }
    }
  ?>