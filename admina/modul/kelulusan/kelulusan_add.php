
           
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                     Kelulusan
                    </h1>
                           <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>kelulusan">Kelulusan</a></li>
                        <li class="active">Tambah Kelulusan</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12"> 
        <div class="box box-solid box-primary">
                                 <div class="box-header">
                                    <h3 class="box-title">Tambah Kelulusan</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                     <form id="input" method="post" class="form-horizontal foto_banyak" action="<?=base_admin();?>modul/kelulusan/kelulusan_action.php?act=in">
                      <div class="form-group">
                        <label for="NIM /NIPD" class="control-label col-lg-2">NIM /NIPD</label>
                        <div class="col-lg-10">
                          <input type="text" data-rule-number="true" name="nim" placeholder="NIM /NIPD" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nama Mahasiswa" class="control-label col-lg-2">Nama Mahasiswa</label>
                        <div class="col-lg-10">
                          <input type="text" name="nama" placeholder="Nama Mahasiswa" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Jenis Keluar" class="control-label col-lg-2">Jenis Keluar</label>
                        <div class="col-lg-10">
                          <select name="id_jenis_keluar" data-placeholder="Pilih Jenis Keluar ..." class="form-control chzn-select" tabindex="2" required>
               <?php foreach ($db->fetch_custom("select * from jenis_keluar where id_jns_keluar!='Z'") as $isi) {
                  echo "<option value='$isi->id_jns_keluar'>$isi->ket_keluar</option>";
               } ?>
              </select>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="SK Yudisium" class="control-label col-lg-2">SK Yudisium</label>
                        <div class="col-lg-10">
                          <input type="text" name="sk_yudisium" placeholder="SK Yudisium" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Tanggal SK Yudisium" class="control-label col-lg-2">Tanggal SK Yudisium</label>
                        <div class="col-lg-10">
                          <input type="text" name="tgl_sk_yudisium" placeholder="Tanggal SK Yudisium" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="IPK" class="control-label col-lg-2">IPK</label>
                        <div class="col-lg-10">
                          <input type="text" name="ipk" placeholder="IPK" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="No seri Ijazah" class="control-label col-lg-2">No seri Ijazah</label>
                        <div class="col-lg-10">
                          <input type="text" name="no_seri_ijasah" placeholder="No seri Ijazah" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Jalur Skripsi" class="control-label col-lg-2">Jalur Skripsi</label>
                        <div class="col-lg-10">
                          <input type="text" name="jalur_skripsi" placeholder="Jalur Skripsi" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Judul Skripsi" class="control-label col-lg-2">Judul Skripsi</label>
                        <div class="col-lg-10">
                          <input type="text" name="judul_skripsi" placeholder="Judul Skripsi" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Bulan Awal Bimbingan" class="control-label col-lg-2">Bulan Awal Bimbingan</label>
                        <div class="col-lg-10">
                          <input type="text" name="bulan_awal_bimbingan" placeholder="Bulan Awal Bimbingan" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Bulan Akhir Bimbingan" class="control-label col-lg-2">Bulan Akhir Bimbingan</label>
                        <div class="col-lg-10">
                          <input type="text" name="bulan_akhir_bimbingan" placeholder="Bulan Akhir Bimbingan" class="form-control" > 
                        </div>
                      </div><!-- /.form-group -->

                      
                      <div class="form-group">
                        <label for="tags" class="control-label col-lg-2">&nbsp;</label>
                        <div class="col-lg-10">
                          <input type="submit" class="btn btn-primary btn-flat" value="submit">
                        </div>
                      </div><!-- /.form-group -->
                    </form>
 <a href="<?=base_index();?>kelulusan" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
            