@extends('layouts.app')
@section('content')

<section class="content">

    <div class="row">
      <div class="col-md-3">

        <!-- Profile Image -->
        <div class="box box-primary">
          <div class="box-body box-profile">
            <img class="profile-user-img img-responsive img-circle" src="" alt="User profile picture">

            <h3 class="profile-username text-center"></h3>

            <p class="text-muted text-center"></p>

            <ul class="list-group list-group-unbordered">
              <li class="list-group-item">
                <b>Tempat Lahir</b> <a class="pull-right"></a>
              </li>
              <li class="list-group-item">
                <b>Tanggal Lahir</b> <a class="pull-right"></a>
              </li>
              <li class="list-group-item">
                <b>No.Telepon</b> <a class="pull-right"></a>
              </li>
            </ul>

            <!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

        <!-- About Me Box -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Alamat Sekarang</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">

            <strong><i class="fa fa-map-marker margin-r-5"></i> </strong>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#profil" data-toggle="tab">Edit Data Profil</a></li>
            <li><a href="#settings" data-toggle="tab">Pengaturan</a></li>
          </ul>
          <div class="tab-content">

            <div class="active tab-pane" id="profil">
              <form class="form-horizontal">
                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" value="">
                    <input type="hidden" class="form-control" id="user_id" name="user_id" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Jenis Kelamin</label>

                  <div class="col-sm-10">
                    <label for=""><input type="radio" class="jk2" name="jk2" value="1" > Laki-Laki &nbsp; &nbsp; &nbsp;</label>
                    <label for=""><input type="radio" class="jk2" name="jk2" value="0" > Perempuan</label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Tempat Lahir</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Tanggal Lahir</label>

                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">No.HP</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="no_hp" name="no_hp" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-10">
                    <textarea style="width: 100%" id="alamat" name="alamat"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Lulusan</label>

                  <div class="col-sm-10">
                    <select id="jenisbeasiswa2" class="form-control" name="jenisbeasiswa2">
                      <option disabled selected>Pilih</option>

                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Angkatan</label>

                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="angkatan" name="angkatan" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Program Studi</label>

                  <div class="col-sm-10">
                    <select id="prodi2" class="form-control" name="prodi2">
                      <option disabled selected>Pilih</option>

                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Status Kerja</label>

                  <div class="col-sm-10">
                    <label for=""><input type="radio" class="statuspekerjaan2" name="statuspekerjaan2" id="statuspekerjaan2" value="1" > Kerja &nbsp; &nbsp; &nbsp;</label>
                    <label for=""><input type="radio" class="statuspekerjaan2" name="statuspekerjaan2" id="statuspekerjaan2" value="0" > Belum Bekerja</label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Tempat Bekerja</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="tmp_bekerja" name="tmp_bekerja" value="">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <a class="btn btn-danger profilEdit" data-id=''><i class="fa fa-fw fa-save"></i>Simpan Perubahan</a>
                  </div>
                </div>
              </form>
            </div>

            <div class="tab-pane" id="settings">
              <form class="form-horizontal">
                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Password Baru</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" name="password" value="">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <a class="btn btn-danger userEdit" data-id=''><i class="fa fa-fw fa-save"></i> Simpan Perubahan</a>
                  </div>
                </div>
              </form>
            </div>
            <!-- /.tab-pane -->
          </div>
          <!-- /.tab-content -->
        </div>
        <!-- /.nav-tabs-custom -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

  </section>
@endsection



