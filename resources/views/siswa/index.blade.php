@extends('layouts.global')
@section('title','Data Siswa')
@section('content')
<!-- Content Header (Page header) -->

<!-- Main content-->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">@yield('title')</h3>
                    <div class="col-md-12">
                       <div class="col-md-4"></div>
                       <br>
                         <div class="col-md-4">
                            <a href="{{route('siswa.create')}}" button type="button" class="btn btn-info btn-flat">create</button></a>
                        </div>

                    </div>
                </div>

                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nisn</th>
                                <th>Nis</th>
                                <th>Nama</th>
                                <th>Id Kelas</th>
                                <th>Alamat</th>
                                <th>No Telp</th>
                                <th>Id Spp</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php $no=1 @endphp
                            @foreach($siswa as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->nisn}}</td>
                                <td>{{$data->nis}}</td>
                                <td>{{$data->nama}}</td>
                                <td>{{$data->id_kelas}}</td>
                                <td>{{$data->alamat}}</td>
                                <td>{{$data->no_telp}}</td>
                                <td>{{$data->id_spp}}</td>


                                <td>
                                    <a href="{{url('siswa/edit',$data->nisn)}}" class="btn btn-sm btn-primary"><i class="fa fa-pencil "></i></a>
                                    @csrf
                                   <a href="{{url('siswa/destroy',$data->nisn)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
