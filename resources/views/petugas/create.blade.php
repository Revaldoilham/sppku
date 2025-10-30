@extends('layouts.global')
@section('title','Create Petugas')
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
                        <div class="col-md-5"></div>
                    </div>
                </div>

                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <div class="col-md-10">
                             <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('petugas.store')}}" method="POST">
                              @csrf
                               <label for="exampleinputEmail1">Id Petugas</label><br>
                            <input type="text" class="form-control" name="id_petugas" readonly value="{{$petugas->code()}}">
                            <br>
                            <label for="exampleinputEmail1">Username</label>
                            <input type="text" class="form-control" name="username" >
                            <br>
                            <label for="exampleinputPassword1">Password</label><br>
                            <input type="text" name="password" id="password" class="form-control">
                            <br>
                            <label for="exampleinputPassword1">Nama Petugas</label><br>
                            <input type="text" name="nama_petugas" id="nama_petugas" class="form-control">
                            <br>
                            <label for="exampleinputEmail1">Level</label>
                            <select name="level" class="form-control" id="level">
                                <option value="">Pilih</option>
                                <option value="admin">Admin</option>
                                <option value="petugas">Petugas</option>
                            </select>
                            <br>


                            <button class="btn btn-primary" name="save_action">Simpan</button>
                            <a href="{{route('petugas.index')}}" class="btn btn-danger">Cancel</a>

                            </form>
                          </div>
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
