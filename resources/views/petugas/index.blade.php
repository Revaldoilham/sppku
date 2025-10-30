@extends('layouts.global')
@section('title','Data Petugas')
@section('content')
<!-- Content Header (Page header) -->

<!-- Main content-->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
                @endif
                <div class="box-header">
                    <h3 class="box-title">@yield('title')</h3>
                    <div class="col-md-12">
                       <div class="col-md-4"></div>
                       <br>
                         <div class="col-md-4">
                            <a href="{{route('petugas.create')}}" button type="button" class="btn btn-info btn-flat">create</button></a>
                        </div>

                    </div>
                </div>

                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Id Petugas</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Nama Petugas</th>
                                <th>Level</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php $no=1 @endphp
                            @foreach($petugas as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->id_petugas}}</td>
                                <td>{{$data->username}}</td>
                                <td>{{$data->password}}</td>
                                <td>{{$data->nama_petugas}}</td>
                                <td>{{$data->level}}</td>

                                <td>
                                    <a href="{{url('/petugas/edit/'.$data->id_petugas)}}" class="btn btn-sm btn-primary"><i class="fa fa-pencil "></i></a>
                                    @csrf
                                   <a href="{{url('/petugas/destroy/'.$data->id_petugas)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
