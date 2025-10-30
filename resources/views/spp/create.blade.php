@extends('layouts.global')
@section('title','Create Spp')
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
                    <a href="{{route('spp.index')}}"><button type="submit" class="btn btn-primary">Kembali</button></a>
                </div>
              </div>


                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <div class="col-md-10">
                             <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('spp.store')}}" method="POST">
                              @csrf
                               <label for="exampleinputEmail1">Id SPP</label><br>
                            <input type="text" class="form-control" name="id_spp" value="{{$spp->code()}}" readonly>
                            <br>
                            <label for="exampleinputEmail1">Tahun</label>
                            <input type="text" class="form-control" name="tahun" >
                            <br>
                            <label for="exampleinputPassword1">Nominal</label><br>
                            <input type="text" name="nominal" id="nominal" class="form-control">
                            <br>


                            <button class="btn btn-primary" name="save_action">Simpan</button>

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
