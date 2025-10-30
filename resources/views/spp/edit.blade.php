@extends('layouts.global')
@section('title','Edit Spp')
@section('content')


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit SPP</h3>
              <!-- button kembali -->
              <div class="col-xs-12">
              	<div class="col-md-10">
              	</div>
              	<div class="col-md-2">
              		<a href="{{route('spp.index')}}"><button type="submit" class="btn btn-primary">Kembali</button></a>
              	</div>
              </div>
              <!-- button kembali -->
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{url('/spp/update/'.$spp->id_spp)}}" method="POST" enctype="multipart/form-data">
            	{{csrf_field()}}

              <div class="box-body" value="PUT">
                <div class="form-group">
                  <label for="id_spp">Id SPP </label>
                  <input type="text" class="form-control" id="id_spp" name="id_spp" placeholder="Enter Id" value="{{$spp->id_spp}}">
                </div>
                <div class="form-group">
                  <label for="tahun">Tahun</label>
                  <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Enter Name" value="{{$spp->tahun}}">
                </div>
                <div class="form-group">
                  <label for="nominal">Nominal</label>
                  <input type="text" name="nominal" id="nominal" class="form-control" value="{{$spp->nominal}}">

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
