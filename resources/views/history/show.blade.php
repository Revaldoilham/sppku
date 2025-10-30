@extends('layouts.global')
@section('title','History Pembayaran Spp')
@section('content')

 <section class="content-header">
      <h1>
        History Pembayaran
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active"> profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-12">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">




              <p class="text-muted text-center">{{$pembayaran->nisn}}</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>ID Pembayaran</b> <a class="pull-right">{{$pembayaran->id_pembayaran}}</a>
                </li>
                <li class="list-group-item">
                  <b>Tanggal Bayar</b> <a class="pull-right">{{$pembayaran->tgl_bayar}}</a>
                </li>
                <li class="list-group-item">
                  <b>Bulan Bayar</b><a class="pull-right">{{$pembayaran->bulan_bayar}}</a>
                </li>
                <li class="list-group-item">
                  <b>Tahun Bayar</b><a class="pull-right">{{$pembayaran->tahun_bayar}}</a>
                </li>
                <li class="list-group-item">
                  <b>Jumlah Bayar</b><a class="pull-right">{{$pembayaran->jumlah_bayar}}</a>
                </li>
              </ul>

              <a href="{{route('history.index')}}" class="btn btn-primary btn-block"><b>Kembali</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->

          <!-- /.box -->
                <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>

@endsection
