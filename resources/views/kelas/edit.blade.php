@extends('layouts.global')
@section('title','Edit Kelas')
@section('content')

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">@yield('title')</h3>
              <!-- button kembali -->
              <div class="col-xs-12">
              	<div class="col-md-10">
              	</div>
              	<div class="col-md-2">
              		<a href="{{route('kelas.index')}}"><button type="submit" class="btn btn-primary">Kembali</button></a>
              	</div>
              </div>
              <!-- button kembali -->
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{url('kelas/update/'.$kelas->id_kelas)}}" method="POST" enctype="multipart/form-data">
            	{{csrf_field()}}

              <div class="box-body" value="PUT">
                <div class="form-group">
                  <label for="id_kelas">Id Kelas </label>
                  <input type="text" class="form-control" id="id_kelas" name="id_kelas" placeholder="Enter Id" value="{{$kelas->id_kelas}}">
                </div>
                <div class="form-group">
                  <label for="nama_kelas">Nama Kelas</label>
                  <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" placeholder="Enter Name" value="{{$kelas->nama_kelas}}">
                </div>
                <div class="form-group">
                  <label for="kompetensi_keahlian">Kompetensi Keahlian</label>
                  <select name="kompetensi_keahlian" id="kompetensi_keahlian" class="form-control">
                    <option value="">Pilih</option>
                    <option>RPL</option>
                    <option>TKJ</option>
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
          <!-- /.box -->

          <!-- Input addon -->


            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>

      </div>
      <!-- /.row -->
    </section>
@endsection
