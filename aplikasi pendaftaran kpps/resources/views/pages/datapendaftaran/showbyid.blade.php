	@extends('default')

	@section('content')
		<div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Data lengkap pelamar</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                    	{{-- IJAZAH --}}
                        <div class="white-box">
                            <div class=""> <img width="300dp" height="250dp" alt="user" src="{{asset('images/'.$pelamar->ijazah)}}">
                                <div class="overlay-box">
                                    {{-- <div class="user-content">
                                        <a href="javascript:voxid(0)"><img src="{{asset('images/'.$pelamar->ijazah)}}" class="thumb-lg img-circle" alt="img"></a>
                                         </div> --}}
                                </div>
                            </div>
                        </div>

                        {{-- KTP --}}
                        <div class="white-box">
                            <div class=""> <img width="300dp" height="250dp" alt="user" src="{{asset('images/'.$pelamar->ktp)}}">
                                <div class="overlay-box">
                                    {{-- <div class="user-content">
                                        <a href="javascript:voxid(0)"><img src="{{asset('assets/plugins/images/users/KTP.jpg')}}" class="thumb-lg img-circle" alt="img"></a>
                                         </div> --}}
                                </div>
                            </div>
                        </div>

                        {{-- SURAT KET DOKTER --}}
                       <div class="white-box">
                            <div class=""> <img width="300dp" height="250dp" alt="user" src="{{asset('images/'.$pelamar->surat_keterangan_dokter)}}">
                                <div class="overlay-box">
                                    {{-- <div class="user-content">
                                        <a href="javascript:voxid(0)"><img src="{{asset('assets/plugins/images/users/KTP.jpg')}}" class="thumb-lg img-circle" alt="img"></a>
                                         </div> --}}
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material" method="post" action="{{route('datapendaftaran.update', $pelamar)}}">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <label class="col-md-12">NIK</label>
                                    <div class="col-md-12">
                                        <input type="text" value="{{$pelamar->nik}}" class="form-control form-control-line" disabled> </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">NAMA</label>
                                    <div class="col-md-12">
                                        <input type="email" placeholder="adelutfi" class="form-control form-control-line" value="{{$pelamar->nama}}" disabled> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">TTL</label>
                                    <div class="col-md-12">
                                        <input type="text" value="{{$pelamar->tempat_lahir}}, {{date('d F Y', strtotime($pelamar->tanggal_lahir))}}" class="form-control form-control-line" disabled> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">JK</label>
                                    <div class="col-md-12">
                                        <input type="text" value="{{$pelamar->jenis_kelamin}}" class="form-control form-control-line" disabled> </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">EMAIL</label>
                                    <div class="col-md-12">
                                        <input type="email" value="{{$pelamar->email}}" class="form-control form-control-line" disabled> </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">NO_HP</label>
                                    <div class="col-md-12">
                                        <input type="email" class="form-control form-control-line" value="{{$pelamar->no_hp}}" disabled> </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">KELULUSAN</label>
                                    <div class="col-md-12">
                                        <input type="email" value="{{$pelamar->lulusan_sekolah}}" class="form-control form-control-line" disabled> </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Status</label>
                                    <div class="col-md-12">
                                        <span class="bedge bedge-info">{{$pelamar->status}}</span>
                                     </div>
                                </div>
                                @if($pelamar->status == 'menunggu')
                                 <div class="form-group">
                                    <label for="example-email" class="col-md-12">Konfirmasi</label>
                                    <div class="col-md-12">
                                       <button type="submit" value="diterima" name="diterima" class="btn btn-success">Diterima</button>
                                       <button type="submit" value="ditolak" name="ditolak" class="btn btn-danger">Ditolak</button>
                                     </div>
                                </div>
                                @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
	@stop



