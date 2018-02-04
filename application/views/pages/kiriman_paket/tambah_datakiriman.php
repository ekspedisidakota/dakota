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
              <h3 class="box-title">Element Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" name='autoSumForm' action="<?php echo base_url('userc/proses_data_user')?>">
              <input type="hidden" name="create_date" value="<?php echo date('Y-m-d h:m:s'); ?>"></input>
              <input type="hidden" name="update_date" value="<?php echo date('Y-m-d h:m:s'); ?>"></input>
              <input type="hidden" name="create_userid" value="<?php echo $this->session->userdata('ID') ?>"></input>
              <input type="hidden" name="update_userid" value="<?php echo $this->session->userdata('ID') ?>"></input>
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
                  </div><br>


                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Tanggal Transaksi</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="inputEmail3" name="kodepos" placeholder="">
                    </div>
                  </div><br>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">No Resi</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="inputEmail3" name="fax" placeholder="">
                    </div>
                  </div><br>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Tujuan</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="inputEmail3" name="fax" placeholder="">
                    </div>
                  </div><br>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">layanan</label>
                    <div class="col-sm-9">
                      <select class="form-control" id="inputEmail3" >
                        <option value="">pilih layanan</option>
                      </select>
                    </div>
                  </div><br>

                   <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Prioritas</label>
                    <div class="col-sm-9">
                      <select class="form-control"  name="" id="propinsi">
                        <option value="">Pilih</option>
                        
                        <?php
                        foreach($data_layanan as $data){ 
                          echo "<option value='".$data->layananid."'>".$data->judul."</option>";
                        }
                        ?>
                      </select>
                    </div>
                  </div><br>

                    <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Satuan Tarif</label>
                    <div class="col-sm-9">
                      <select class="form-control" id="inputEmail3" >
                        <option value="">pilih </option>
                      </select>
                    </div>
                  </div><br>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Nilai Barang</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="inputEmail3" name="fax" placeholder="">
                    </div>
                  </div><br>

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
                      <input type='text' name='angsuran_pokok' class="form-control" onFocus="startCalc();" onBlur="stopCalc();" />
                    </div>
                  </div><br>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Biaya Packing</label>
                    <div class="col-sm-9">
                      <input type='text' name='angsuran_bunga' class="form-control" onFocus="startCalc();" onBlur="stopCalc();" />
                    </div>
                  </div><br>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Sub total</label>
                    <div class="col-sm-9">
                      <input readonly type=text value='0' name="sub" class="form-control" readonly>
                    </div>
                  </div><br>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Diskon</label>
                    <div class="col-sm-9">
                      <input type='text' name="diskon" class="form-control"   onFocus="startCalc();" onBlur="stopCalc();"  />
                    </div>
                  </div><br>
                  
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Total</label>
                    <div class="col-sm-9">
                      <input readonly type=text value='0' name="jumlah" class="form-control" readonly>
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
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
