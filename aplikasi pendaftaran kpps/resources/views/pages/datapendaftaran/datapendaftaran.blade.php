@extends('default')
@section('content')

            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Data Pendaftaran</h4> 
                    </div>
                </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="table-responsive">
                                <table class="table" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIK</th>
                                            <th>NAMA</th>
                                            <th>TTL</th>
                                            <th>JK</th>
                                            <th>EMAIL</th>
                                            <th>NO_HP</th>
                                            <th>LULUSAN</th>
                                            <th>STATUS</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php($no = 1)
                                        @foreach($pelamars as $pelamar)
                                        <tr>
                                            <td>{{$no}}</td>
                                            <td><a href="{{route('datapendaftaran.show', $pelamar)}}">{{$pelamar->nik}}</a></td>
                                            <td>{{$pelamar->nama}}</td>
                                            <td>{{date('d M Y', strtotime($pelamar->tanggal_lahir))}}</td>
                                            <td>{{$pelamar->jenis_kelamin}}</td>
                                            <td>{{$pelamar->email}}</td>
                                            <td>{{$pelamar->no_hp}}</td>
                                            <td>{{$pelamar->lulusan_sekolah}}</td>
                                            <td>{{$pelamar->status}}</td>
                                            <td>
                                                <a href="{{route('datapendaftaran.show', $pelamar)}}"><i class="fa fa-eye fa-lg"></i></a> &nbsp;
                                            	<a href="{{route('datapendaftaran.edit')}}"><i class="fa fa-edit fa-lg"></i></a>&nbsp;
                                            	<a href=""><i class="fa fa-trash fa-lg"></i></a>
                                            </td>
                                        </tr>
                                        @php($no++)
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            
@endsection	