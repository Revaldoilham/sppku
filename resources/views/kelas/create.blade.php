@extends('layouts.global')
@section('title','Create Kelas')
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

                {{-- <div class="col-xs-12">
                <div class="col-md-10">
                </div>
                <div class="col-md-2">
                    <a href="{{route('kelas.index')}}"><button type="submit" class="btn btn-primary">Kembali</button></a>
                </div>
              </div> --}}


                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <div class="col-md-10">
                             <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('kelas.store')}}" method="POST">
                              @csrf
                               <label for="exampleinputEmail1">Id Kelas</label><br>
                            <input type="text" class="form-control" name="id_kelas"  readonly value="{{$kelas->code()}}">
                            <br>
                            <label for="exampleinputEmail1">Nama Kelas</label>
                            <input type="text" class="form-control" name="nama_kelas" >
                            <br>
                            <label for="exampleinputPassword1">Kompetensi Keahlian</label><br>
                                <select name="kompetensi_keahlian" id="kompetensi_keahlian" class="form-control">
                                    <option value="">Pilih</option>
                                    <option value="rekayasa perangkat lunak">RPL</option>
                                    <option value="teknik komputer dan jaringan">TKJ</option>
                                </select>
                              <br>


                            <button class="btn btn-primary" name="save_action">Simpan</button>
                            <a href="{{route('kelas.index')}}" class="btn btn-danger">Cancel</a>

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
