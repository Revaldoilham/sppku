@extends('layouts.global')
@section('title','spp')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Data Tables
        <small>advanced tables</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
    </ol>
</section>

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
                    <h3 class="box-title">Hover Data Table</h3>
                    <div class="col-md-12">
                       <div class="col-md-4"></div>
                       <br>
                         <div class="col-md-4">
                            <a href="{{route('spp.create')}}" button type="button" class="btn btn-info btn-flat">create</button></a>
                        </div>

                    </div>
                </div>

                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Id Spp</th>
                                <th>Tahun</th>
                                <th>Nominal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php $no=1 @endphp
                            @foreach($spp as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->id_spp}}</td>
                                <td>{{$data->tahun}}</td>
                                <td>{{$data->nominal}}</td>


                                <td>
                                    <a href="{{url('/spp/edit/'. $data->id_spp)}}" class="btn btn-sm btn-primary"><i class="fa fa-pencil "></i></a>
                                    @csrf
                                   <a href="{{url('/spp/destroy/'.$data->id_spp)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
