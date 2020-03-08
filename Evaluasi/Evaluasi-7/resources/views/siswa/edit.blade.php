@extends('layout.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Edit Data Siswa</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/siswa/{{$siswa->id}}/update" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label>Nama Depan</label>
                                    <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Nama Depan..."
                                        value="{{$siswa->nama_depan}}">
                                </div>
                                <div class="form-group">
                                    <label>Nama Belakang</label>
                                    <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Nama Belakang..."
                                        value="{{$siswa->nama_belakang}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                        <option value="L" @if($siswa->jenis_kelamin == 'L') selected @endif>Laki-laki
                                        </option>
                                        <option value="P" @if($siswa->jenis_kelamin == 'P') selected @endif>Perempuan
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Agama</label>
                                    <input name="agama" type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Agama..." value="{{$siswa->agama}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Alamat</label>
                                    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1"
                                        rows="3" placeholder="Alamat...">{{$siswa->alamat}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Avatar</label>
                                    <input type="file" name="avatar" class="form-control">
                                </div>
                                <small class="form-text text-muted">*Harap mengisi semua aplikasi yang ada.</small>
                        </div>
                        <div class="modal-footer">
                            <a class="btn btn-secondary" href="/siswa" role="button">Gak Jadi</a>
                            <button type="submit" class="btn btn-warning">Ubah Data</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

@section('content1')
<h2>Edit Data Siswa</h2>
<br />
<div class="row">
    <div class="col-lg-12">
        <form action="/siswa/{{$siswa->id}}/update" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label>Nama Depan</label>
                <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Nama Depan..." value="{{$siswa->nama_depan}}">
            </div>
            <div class="form-group">
                <label>Nama Belakang</label>
                <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Nama Belakang..." value="{{$siswa->nama_belakang}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                    <option value="L" @if($siswa->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
                    <option value="P" @if($siswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label>Agama</label>
                <input name="agama" type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Agama..." value="{{$siswa->agama}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Alamat</label>
                <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"
                    placeholder="Alamat...">{{$siswa->alamat}}</textarea>
            </div>
            <small class="form-text text-muted">*Harap mengisi semua aplikasi yang ada.</small>
    </div>
    <div class="modal-footer">
        <a class="btn btn-secondary" href="/siswa" role="button">Gak Jadi</a>
        <button type="submit" class="btn btn-warning">Ubah Data</button>
    </div>
    </form>
</div>
@endsection
