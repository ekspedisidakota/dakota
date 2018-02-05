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
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post"  name='autoSumForm' action="<?php echo base_url('userc/proses_data_user')?>">
              <div class="box-body ">

                  <div class="col-md-6">
                    <h4><b>Data Pengirim</b></h4><hr>
                    <div class="form-group col-md-12">
                      <label>Pengirim</label>
                      <select name="level_user" class="form-control" required>
                        <option value="">Pilih Pengirim</option>
                        <?php
                        if (is_array($data_pengirim)) {
                          foreach ($data_pengirim as $row) {
                            echo '<option value="'.$row->mitraid.'">'.$row->nama.'</option>';
                          }
                          }
                        ?>
                      </select>
                    </div>
                    <div class="form-group col-md-12">
                      <label>Alamat</label>
                      <textarea class="form-control" ></textarea>
                    </div>
                    <div class="form-group col-md-12">
                      <label>Telepon</label>
                      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="nama">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <h4><b>Data Penerima</b></h4><hr>
                    <div class="form-group col-md-12">
                      <label>Penerima</label>
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Penerima" name="Penerima">
                    </div>                    
                    <div class="form-group col-md-12">
                      <label>Alamat</label>
                      <textarea class="form-control" ></textarea>
                    </div>
                    <div class="form-group col-md-12">
                      <label>Telepon</label>
                      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="nama">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <hr><h4><b>Data Pengiriman</b></h4><hr>
                    <div class="form-group col-md-12">
                      <label>Jenis Pengiriman</label>
                      <select name="level_user" class="form-control" required>
                        <option value="">Pilih Pengiriman</option>
                        <?php
                        if (is_array($data_pengirim)) {
                          foreach ($data_pengirim as $row) {
                            echo '<option value="'.$row->mitraid.'">'.$row->nama.'</option>';
                          }
                          }
                        ?>
                      </select>
                    </div>
                    <div class="form-group col-md-12">
                      <label>Tanggal Transaksi</label>
                      <input type="date" class="form-control" id="inputEmail3" placeholder="" name="nama">
                    </div>
                    <div class="form-group col-md-12">
                      <label>No Resi</label>
                      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="nama">
                    </div>
                    <div class="form-group col-md-12">
                      <label>Tujuan</label>
                      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="nama">
                    </div>
                    <div class="form-group col-md-12">
                      <div class="col-md-9">
                        <label>Layanan</label>
                        <select name="level_user" class="form-control" required>
                          <option value="">Pilih Layanan</option>
                          <?php
                          if (is_array($data_pengirim)) {
                            foreach ($data_pengirim as $row) {
                              echo '<option value="'.$row->mitraid.'">'.$row->nama.'</option>';
                            }
                            }
                          ?>
                        </select>                        
                      </div>
                      <div class="col-md-3">
                        <label>P</label>
                        <a  data-toggle="modal" data-target="#modal-default" type="button" class="btn btn-info form-control">Tambah</a> 
                      </div>
                    </div>
                    <div class="form-group col-md-12">
                      <label>Prioritas</label>
                      <select name="level_user" class="form-control" required>
                        <option value="">Pilih Prioritas</option>
                        <?php
                        if (is_array($data_pengirim)) {
                          foreach ($data_pengirim as $row) {
                            echo '<option value="'.$row->mitraid.'">'.$row->nama.'</option>';
                          }
                          }
                        ?>
                      </select>
                    </div>
                    <div class="form-group col-md-12">
                      <label>Satuan Tarif</label>
                      <select name="level_user" class="form-control" required>
                        <option value="">Pilih Satuan Tarif</option>
                        <?php
                        if (is_array($data_pengirim)) {
                          foreach ($data_pengirim as $row) {
                            echo '<option value="'.$row->mitraid.'">'.$row->nama.'</option>';
                          }
                          }
                        ?>
                      </select>
                    </div>
                    <div class="form-group col-md-12">
                      <label>Nilai Barang</label>
                      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="nama">
                    </div>                    
                    <div class="form-group col-md-12">
                      <label>Gunakan Asuransi</label>
                      <select name="level_user" class="form-control" required>
                        <option value="">Pilih</option>
                        <option value="Admin">Ya</option>
                        <option value="Petugas">Tidak</option>
                      </select>
                    </div>
                  </div>

                  <script>
                  function startCalc(){
                    interval = setInterval("calc()",1);
                  }
                  
                  function calc(){

                    one = document.autoSumForm.angsuran_pokok.value;
                    two = document.autoSumForm.angsuran_bunga.value;
                    three = document.autoSumForm.diskon.value;
                    sub = document.autoSumForm.sub.value = (one * 1) + (two * 1);

                    panjang = document.autoVolume.panjang.value;
                    lebar = document.autoVolume.lebar.value;
                    tinggi = document.autoVolume.tinggi.value;
                    document.autoVolume.volume.value = panjang*lebar*tinggi;

                    document.autoSumForm.jumlah.value = sub-(sub*(three / 100));
                  }

                  function stopCalc(){
                    clearInterval(interval);
                  }
                  </script>
                  <div class="col-md-6">
                    <hr><h4><b>Estimasi Lama Pengiriman</b></h4><hr>
                    <div class="form-group col-md-12">
                      <label>Biaya Pengiriman</label>
                      <input name='angsuran_pokok' type="number" class="form-control" placeholder="" onFocus="startCalc();" onBlur="stopCalc();" >
                    </div>
                    <div class="form-group col-md-12">
                      <label>Biaya Packing</label>
                      <input name='angsuran_bunga' type="number" class="form-control" placeholder="" onFocus="startCalc();" onBlur="stopCalc();" >
                    </div>
                    <div class="form-group col-md-12">
                      <label>Subtotal</label>
                      <input name='sub'  type="number" class="form-control" placeholder="" readonly>
                    </div>
                    <div class="form-group col-md-12">
                      <label>Diskon</label>
                      <input name='diskon'  type="number" class="form-control" placeholder="" onFocus="startCalc();" onBlur="stopCalc();" >
                    </div>
                     <div class="form-group col-md-12">
                      <label>Total</label>
                      <input name='jumlah'  type="number" class="form-control" placeholder="" readonly>
                    </div>
                  </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="button" class="btn btn-primary">Simpan</button>
                <a href="<?php echo base_url('userc/data_user')?>" type="button" class="btn btn-warning">Kembali</a>
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
  <!-- /.modal -->
  <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Tambah Barang <?php echo $this->cart->total_items(); ?></h4>
        </div>
        <form  name='autoVolume' role="form" method="post" action="<?php echo base_url('Kiriman_paketc/proses_cart')?>" enctype= "multipart/form-data">
          <input name="id" type="hidden" value="<?php echo $this->cart->total_items(); ?>"></input>
          <div class="modal-body">
            <div class="box-body ">
              <div class="form-group col-md-3">
                <label>Panjang (m)</label>
                <input name="panjang" type="number" class="form-control" onFocus="startCalc();" onBlur="stopCalc();" required>
              </div>
              <div class="form-group col-md-3">
                <label>Lebar (m)</label>
                <input name="lebar" type="number" class="form-control" onFocus="startCalc();" onBlur="stopCalc();" required>
              </div>
              <div class="form-group col-md-3">
                <label>Tinggi (m)</label>
                <input name="tinggi" type="number" class="form-control" onFocus="startCalc();" onBlur="stopCalc();" required>
              </div>
              <div class="form-group col-md-3">
                <label>Vol(m3)</label>
                <input name="volume" type="text" class="form-control" readonly>
              </div>
              <table class="table table-condensed">
                <thead>
                  <tr>
                    <td>Panjang</td>
                    <td>Lebar</td>
                    <td>Tinggi</td>
                    <td>Volume</td>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $i=0;
                    foreach ($this->cart->contents() as $items) : 
                    $i++;
                  ?>
                  <tr>
                    <td><?= $items['options']['panjang'] ?> m</td>
                    <td><?= $items['options']['lebar'] ?> m</td>
                    <td><?= $items['options']['tinggi'] ?> m</td>
                    <td><?= $items['options']['volume'] ?> m3</td>
                  </tr>

                  <?php endforeach; ?>
                </tbody>
              </table>
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