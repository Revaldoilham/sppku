@extends('layouts.global')
@section('title','Edit Siswa')
@section('content')

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">@yield('title')</h3>
              <!-- button kembali -->

              <!-- button kembali -->
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{url('/siswa/update',$siswa->nisn)}}" method="POST" enctype="multipart/form-data">
            	{{csrf_field()}}

              <div class="box-body" value="PUT">
                <div class="form-group">
                  <label for="nisn">Nisn </label>
                  <input type="text" class="form-control" id="nisn" name="nisn"  value="{{$siswa->nisn}}">
                </div>
                <div class="form-group">
                  <label for="nis">Nis</label>
                  <input type="text" class="form-control" id="nis" name="nis" value="{{$siswa->nis}}">
                </div>
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" name="nama" id="nama" class="form-control" value="{{$siswa->nama}}">
                </div>
                <div class="form-group">
                  <label for="id_kelas">Id Kelas</label>
                  <select type="text" name="id_kelas" class="form-control" id="id_kelas">
                    <option value="{{$siswa->id_kelas}}">{{$siswa->id_kelas}}</option>
                    @foreach($kelas as $data)
                    <option value="{{$data->id_kelas}}">{{$data->id_kelas}}</option>
                    @endforeach
                </select>

                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Enter Name" value="{{$siswa->alamat}}">
                </div>
                <div class="form-group">
                  <label for="no_telp">No Telp</label>
                  <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Enter Name" value="{{$siswa->no_telp}}">
                </div>
                <div class="form-group">
                  <label for="id_spp">Id Spp</label>
                  <select type="text" name="id_spp" class="form-control" id="id_spp">
                    <option value="{{$siswa->id_spp}}">{{$siswa->id_spp}}</option>
                    @foreach($spp as $data)
                    <option value="{{$data->id_spp}}">{{$data->id_spp}}</option>
                    @endforeach
                </select>

                </div>



              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" value="save">Submit</button>
                <a href="{{route('siswa.index')}}" class="btn btn-danger">Cancel</a>
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
