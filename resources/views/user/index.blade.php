@extends('layouts.global')
@section('title','Data Users')
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
                            <a href="{{route('user.create')}}" button type="button" class="btn btn-info btn-flat">create</button></a>
                        </div>

                    </div>
                </div>

                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>name</th>
                                <th>email</th>
                                <th>password</th>
                                <th>level</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php $no=1 @endphp
                            @foreach($users as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->password}}</td>
                                <td>{{$data->level}}</td>


                                <td>
                                    @csrf
                                   <a href="{{url('user/destroy/'.$data->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
