@extends('layouts.app')
@section('content')
<section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-8">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Berita</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore in, corrupti impedit officia sapiente labore, nihil voluptate velit placeat commodi debitis quibusdam. Quibusdam sit rem nihil vel, sint placeat nobis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut alias incidunt odit veritatis, rem expedita. Asperiores temporibus maxime, quos nulla ut ipsa quia optio doloremque deleniti perspiciatis quas aperiam nostrum?</p>
          </div>
        </div>
      </div>
      <!--/.col (left) -->
      <!-- right column -->
      <div class="col-md-4">
        <!-- Horizontal Form -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Berita Terbaru</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
            <form method="POST" action="{{ route('login') }}" class="form-horizontal">
                @csrf
            <div class="box-body">
              <div class="form-group">
                <div class="col-sm-12">
                    <a href="">Kuliah Pengembangan Startup di STT Terpadu Nurul Fikri</p></a>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12">
                    <a href="">Kuliah Pengembangan Startup di STT Terpadu Nurul Fikri</p></a>
                </div>
              </div>
            </div>
          </form>
        </div>
        <!-- /.box -->
      </div>
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </section>
@endsection



