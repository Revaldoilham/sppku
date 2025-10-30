@extends('layouts.global')
@section('title','Create User')
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

                <div class="col-xs-12">
                <div class="col-md-10">
                </div>
                <div class="col-md-2">
                    <a href="{{route('user.index')}}"><button type="submit" class="btn btn-primary">Kembali</button></a>
                </div>
              </div>


                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <div class="col-md-10">
                             <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('user.store')}}" method="POST">
                              @csrf
                               <label for="exampleinputEmail1">name</label><br>
                            <input type="text" class="form-control" name="name">
                            <br>
                            <label for="exampleinputEmail1">email</label>
                            <input type="email" class="form-control" name="email" >
                            <br>
                            <label for="exampleinputPassword1">password</label><br>
                            <input type="text" name="password" class="form-control">
                            <br>
                            <label for="exampleinputEmail1">level</label>
                            <select class="form-control" name="level" id="level">
                                <option value="">Pilih</option>
                                <option value="admin">Admin</option>
                                <option value="petugas">Petugas</option>
                                <option value="siswa">Siswa</option>
                            </select>
                            <br>
                            <button class="btn btn-primary" name="save_action">Simpan</button>

                            </form>
                          </div>
                        </tbody>

                    </table>
                </div>
                 @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
                @endif
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
