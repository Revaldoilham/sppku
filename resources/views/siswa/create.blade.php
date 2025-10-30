@extends('layouts.global')
@section('title','Create Siswa')
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
                    <a href="{{route('siswa.index')}}"><button type="submit" class="btn btn-primary">Kembali</button></a>
                </div>
              </div> --}}


                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <div class="col-md-12">
                             <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('siswa.store')}}" method="POST">
                              @csrf
                               <label for="exampleinputEmail1">Nisn</label><br>
                            <input type="text" class="form-control" name="nisn" value="{{$siswa->code()}}" readonly>
                            <br>
                            <label for="exampleinputEmail1">Nis</label>
                            <input type="text" class="form-control" name="nis" value="{{$siswa->code2()}}" readonly>
                            <br>
                            <label for="exampleinputPassword1">Nama</label><br>
                            <input type="text" name="nama" class="form-control">
                            <br>
                            <label for="exampleinputEmail1">Id Kelas</label>
                            <select type="text" name="id_kelas" class="form-control" id="id_kelas">
                                <option value="">Pilih</option>
                                @foreach($kelas as $data)
                                <option value="{{$data->id_kelas}}">{{$data->nama_kelas}}</option>
                                @endforeach
                            </select>
                            <br>
                            <label for="exampleinputEmail1">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" >
                            <br>
                            <label for="exampleinputEmail1">No Telp</label>
                            <input type="text" class="form-control" name="no_telp" >
                            <br>
                            <label for="exampleinputEmail1">Id Spp</label>
                            <select type="text" name="id_spp" class="form-control" id="id_spp">
                                <option value="">Pilih</option>
                                @foreach($spp as $data)
                                <option value="{{$data->id_spp}}">{{$data->id_spp}}</option>
                                @endforeach
                            </select>
                            <br>

                            <button class="btn btn-primary" name="save_action">Simpan</button>
                            <a href="{{route('siswa.index')}}" class="btn btn-danger">Cancel</a>

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
