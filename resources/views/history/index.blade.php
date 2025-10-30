@extends('layouts.global')
@section('title','Pembayaran')
@section('content')
<!-- Content Header (Page header) -->

<!-- Main content-->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">@yield('title')</h3>
                </div>

                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Id Pembayaran</th>
                                <th>Id Petugas</th>
                                <th>Nisn</th>
                                <th>Tangggal Bayar</th>
                                <th>Bulan Bayar</th>
                                <th>Tahun Bayar</th>
                                <th>Id Spp</th>
                                <th>Jumlah Bayar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php $no=1 @endphp
                            @foreach($pembayaran as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->id_pembayaran}}</td>
                                <td>{{$data->id_petugas}}</td>
                                <td>{{$data->nisn}}</td>
                                <td>{{$data->tgl_bayar}}</td>
                                <td>{{$data->bulan_bayar}}</td>
                                <td>{{$data->tahun_bayar}}</td>
                                <td>{{$data->id_spp}}</td>
                                <td>{{$data->jumlah_bayar}}</td>

                                <td>

                                    @csrf
                                   <a href="{{route('history.show', $data->id_pembayaran)}}" class="btn btn-sm btn-info">History</i></a>
                                   </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>

                    </table>
                </div>

                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
@endsection
