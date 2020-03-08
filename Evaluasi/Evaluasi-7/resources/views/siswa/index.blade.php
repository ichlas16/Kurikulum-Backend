@extends('layout.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h2 class="panel-title">Data Siswa</h2>
                            <div class="right">
                                <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i
                                        class="lnr lnr-plus-circle"></i></button>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>NAMA DEPAN</th>
                                        <th>NAMA BELAKANG</th>
                                        <th>JENIS KELAMIN</th>
                                        <th>AGAMA</th>
                                        <th>ALAMAT</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data_siswa as $siswa)
                                    <tr>
                                        <td><a href="/siswa/{{$siswa->id}}/profile">{{$siswa->nama_depan}}</a></td>
                                        <td><a href="/siswa/{{$siswa->id}}/profile">{{$siswa->nama_belakang}}</a></td>
                                        <td>{{$siswa->jenis_kelamin}}</td>
                                        <td>{{$siswa->agama}}</td>
                                        <td>{{$siswa->alamat}}</td>
                                        <td>
                                            <a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">edit</a>
                                            <a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm"
                                                onclick="return confirm('yakin nich gan, mau dihapus?')">hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/siswa/create" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Nama Depan</label>
                        <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Nama Depan...">
                    </div>
                    <div class="form-group">
                        <label>Nama Belakang</label>
                        <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Nama Belakang...">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Agama</label>
                        <input name="agama" type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Agama...">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Alamat</label>
                        <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Alamat..."></textarea>
                    </div>
                    <small class="form-text text-muted">*Harap mengisi semua aplikasi yang ada.</small>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Gak jadi</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
@stop
