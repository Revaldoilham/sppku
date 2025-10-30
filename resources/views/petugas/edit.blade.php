@extends('layouts.global')
@section('title','Edit Petugas')
@section('content')
    <section class="content-header">
      <h1>
        General Form Elements
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Petugas</h3>
              <!-- button kembali -->
              <div class="col-xs-12">
              	<div class="col-md-10">
              	</div>
              	<div class="col-md-2">
              		<a href="{{route('petugas.index')}}"><button type="submit" class="btn btn-primary">Kembali</button></a>
              	</div>
              </div>
              <!-- button kembali -->
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{url('/petugas/update/'.$petugas->id_petugas)}}" method="POST" enctype="multipart/form-data">
            	{{csrf_field()}}
          
              <div class="box-body" value="PUT">
                <div class="form-group">
                  <label for="id_petugas">Id Petugas </label>
                  <input type="text" class="form-control" id="id_petugas" name="id_petugas" placeholder="Enter Id" value="{{$petugas->id_petugas}}">
                </div>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Enter Name" value="{{$petugas->username}}">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="text" name="password" id="password" class="form-control" value="{{$petugas->password}}">     
                </div>
                <div class="form-group">
                  <label for="nama_petugas">Nama Petugas</label>
                  <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" placeholder="Enter Name" value="{{$petugas->nama_petugas}}">
                </div>
                <div class="form-group">
                  <label for="level">Level</label>
                  <select name="level" class="form-control" id="level">
                    <option value="">Pilih</option>
                    <option>Admin</option>
                    <option>Petugas</option>
                  </select>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" value="save">Submit</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
        	@if(session('status'))
        	<div class="callout callout-success">
        		<h4>Berhasil Ditambahkan !</h4>
        		<p>{{session('status')}}</p>
        	</div>
        	@endif
          </div>
       </div>

    </section>
@endsection