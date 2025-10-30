@extends('layouts.global')
@section('title','Transaksi SPP')
@section('content')


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
                <form role="form" action="{{route('pembayaran.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <tr>
                                <th><label>ID Transaksi</label></th>
                                <td>
                                    <input type="text" class="form-control" id="id_pembayaran" readonly placeholder="id_pembayaran" name="id_pembayaran"value="{{$dataaaa->code()}}">
                                </td>
                            </tr>
                        </div>
                        <div class="col-md-3">
                            <tr>
                                <th><label>Tanggal Bayar</label></th>
                                <td>
                                    <input type="text" name="tgl_bayar" class="form-control" id="tgl_bayar" value="{{date('d-m-y')}}">
                                </td>
                            </tr>
                        </div>
                        <div class="col-md-3">
                            <tr>
                                <th><label>Bulan Bayar</label></th>
                                <td>
                                    <select type="text" name="bulan_bayar" class="form-control" id="bulan_bayar">
                                        <option value="">Pilih</option>
                                        <option value="januari">Januari</option>
                                        <option value="februari">Februari</option>
                                        <option value="maret">Maret</option>
                                        <option value="april">April</option>
                                        <option value="mei">Mei</option>
                                        <option value="juni">Juni</option>
                                        <option value="juli">Juli</option>
                                        <option value="agustus">Agustus</option>
                                        <option value="september">September</option>
                                        <option value="oktober">Oktober</option>
                                        <option value="november">November</option>
                                        <option value="desember">Desember</option>
                                    </select>
                                </td>
                            </tr>
                        </div>
                        <div class="col-md-3">
                            <tr>
                                <th><label>Tahun Bayar</label></th>
                                <td>
                                    <input type="text" name="tahun_bayar" class="form-control" id="tahun_bayar">
                                </td>
                            </tr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <th><label>NISN</label></th>
                            <td>
                                <input type="text" class="form-control" id="nisn" placeholder="" name="nisn" >
                                {{--<input type="hidden" id="nisn" name="nisn"> --}}
                            </td>

                        <div class="row">
                            <div class="col-md-12">
                            <th><label for="">Nama</label></th>
                            <td>
                                <input type="text" class="form-control" id="nama" placeholder="" name="nama">
                            </td>
                        </div>
                     </div>
                        </div>
                        {{-- <div class="col-md-3">
                            <tr>
                                <th><label>Id Petugas</label></th>
                                <select type="text" name="id_petugas" class="form-control" id="id_petugas">
                                    <option value="">Pilih</option>
                                    @foreach($petugas as $data)
                                    <option value="{{$data->id_petugas}}">{{$data->id_petugas}}</option>
                                    @endforeach
                                </select>
                            </tr>
                        </div> --}}
                        <div class="col-md-3">
                            <tr>
                                <th><label>Nominal SPP</label></th>
                                <select type="text" name="id_spp" class="form-control" id="id_spp">
                                    <option value="">Pilih</option>
                                    @foreach($spp as $data)
                                    <option value="{{$data->id_spp}}">{{$data->nominal}}</option>
                                    @endforeach;
                                </select>

                            </tr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <tr>
                                <th><label>Jumlah Bayar</label></th>
                                <td>
                                 <input type="text" name="jumlah_bayar" class="form-control" id="jumlah_bayar">
                                 </td>
                            </tr>
                        </div>
                        <div class="col-md-12">
                            <div class="box-footer">
                                 <button type="submit" class="btn btn-primary">Submit</button>
                             </div>
                        </div>
                    </div>
                 </form>
            </div>
        </div>
    </div>
</section>

@endsection

@push('bottom')
    <script type="text/javascript">
        $('#nisn').keyup(function (e) {
            var nisn = $('#nisn').val();
            console.log(nisn);
            if (nisn != '') {
                $.ajax({
                    type: "get",
                    url: "{{route('cari')}}",
                    data: {nisn},
                    dataType: "json",
                    success: function (response) {
                        console.log(JSON.stringify(response, null, 4));
                        if (response.val != 0) {
                            const {data} = response;
                            $('#nama').val(data.nama);
                        }
                    }
                });
            }
        });
    </script>
@endpush
