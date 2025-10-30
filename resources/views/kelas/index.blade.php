@extends('layouts.global')
@section('title','Data Kelas')
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
                            <a href="{{route('kelas.create')}}" button type="button" class="btn btn-info btn-flat">create</button></a>
                        </div>

                    </div>
                </div>

                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Id Kelas</th>
                                <th>Nama Kelas</th>
                                <th>Kompetensi Keahlian</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php $no=1 @endphp
                            @foreach($kelas as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->id_kelas}}</td>
                                <td>{{$data->nama_kelas}}</td>
                                <td>{{$data->kompetensi_keahlian}}</td>


                                <td>
                                    <a href="{{url('kelas/edit/'.$data->id_kelas)}}" class="btn btn-sm btn-primary"><i class="fa fa-pencil "></i></a>
                                    @csrf
                                   <a href="{{url('kelas/destroy/'.$data->id_kelas)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
