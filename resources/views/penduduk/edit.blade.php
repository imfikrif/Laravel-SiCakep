@extends('layout')
@section('content')

<div class="row mb-3">
    <div class="col-lg-12">
        <div class="row">
            <div class="col" style="width: 630px;">
                <div class="card shadow-sm mb-3">

                    <!-- Judul -->
                    <div class="card-header py-3">
                        <p class="text-dark-500 m-0 font-weight-bold">Ubah Data Penduduk</p>
                    </div>

                    <!-- isian form -->
                    <div class="card-body">
                        <form action="{{ route('penduduk.update') }}" method="post">
                            <?= csrf_field(); ?>
                            <div class="form-row">

                                <!-- kolom kiri -->
                                <div class="col-md-6 px-2">
                                    <input type="hidden" value="{{ $data->id }}" name="id">
                                    <div class="form-group">
                                        <strong>NIK</strong>
                                        <input class="form-control" type="text" value="{{ $data->nik }}" placeholder="Masukan NIK" name="nik" required>
                                    </div>

                                    <div class="form-group">
                                        <strong>Nama</strong>
                                        <input class="form-control" type="text" value="{{ $data->nama }}" placeholder="Masukan nama" name="nama" required>
                                    </div>

                                    <div class="form-group">
                                        <strong>Tempat Lahir</strong>
                                        <input class="form-control" type="text" value="{{ $data->tempat_lahir }}" placeholder="Masukan tempat lahir" name="tempat_lahir" required>
                                    </div>

                                    <div class="form-group">
                                        <strong>Tanggal Lahir</strong>
                                        <input class="form-control" type="date" value="{{ $data->tanggal_lahir }}" name="tanggal_lahir" required>
                                    </div>

                                    <div class="form-group">
                                        <strong>Jenis Kelamin</strong>
                                        <select name="jenis_kelamin" class="form-control" aria-label="Default" value="{{ $data->jenis_kelamin}}" aria-describedby="inputGroup-sizing-default">
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Peremupuan</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <strong>Status Kawin</strong>
                                        <select name="status_kawin" class="form-control" aria-label="Default" value="{{ $data->status_kawin }}" aria-describedby="inputGroup-sizing-default">
                                            <option value="Belum kawin">Belum kawin</option>
                                            <option value="Sudah kawin">Sudah kawin</option>
                                            <option value="Cerai hidup">Cerai hidup</option>
                                            <option value="Cerai mati">Cerai mati</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <strong>Alamat</strong>
                                        <input class="form-control" type="text" value="{{ $data->alamat }}" placeholder="Masukan alamat" name="alamat" required>
                                    </div>
                                </div>

                                <!-- kolom kanan -->
                                <div class="col-md-6 px-2">

                                    <div class="form-group">
                                        <strong>Pekerjaan</strong>
                                        <input type="text" name="pekerjaan" class="form-control"  value="{{ $data->pekerjaan }}" placeholder="Masukan pekerjaan" required>
                                    </div>

                                    <div class="form-group">
                                        <strong>Pendidikan</strong>
                                        <select name="pendidikan" class="form-control"  value="{{ $data->pendidikan }}" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                            <option value="SD">SD</option>
                                            <option value="SMP">SMP</option>
                                            <option value="SMA">SMA</option>
                                            <option value="SMK">SMP</option>
                                            <option value="D1">D1</option>
                                            <option value="D2">D2</option>
                                            <option value="D3">D3</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                            <option value="Tidak ada">Tidak ada</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <strong>Agama</strong>
                                        <select name="agama" class="form-control" value="{{ $data->agama }}" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                            <option value="Islam">Islam</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Protestan">Protestan</option>
                                            <option value="Budha">Budha</option>
                                            <option value="Hindu">Hindu</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <strong>Lurah/Desa</strong>
                                        <input class="form-control" type="text"  value="{{ $data->lurah }}" name="lurah" placeholder="Masukan lurah/desa" required>
                                    </div>

                                    <div class="form-group">
                                        <strong>Kecamatan</strong>
                                        <input class="form-control" type="text" value="{{ $data->kecamatan }}" placeholder="Masukan kecamatan" name="kecamatan" required>
                                    </div>

                                    <div class="form-group">
                                        <strong>Kabupaten</strong>
                                        <input class="form-control" type="text" value="{{ $data->kabupaten }}" placeholder="Masukan kabupaten" name="kabupaten" required>
                                    </div>

                                    <div class="form-group">
                                        <strong>Provinsi</strong>
                                        <input class="form-control" type="text"  value="{{ $data->provinsi }}" placeholder="Masukan provinsi" name="provinsi" required>
                                    </div>
                                    <!-- <label class="input-group-text" for="inputGroupFile02">Upload</label> -->
                                </div>
                                <button class="btn btn-primary btn-block m-2" type="submit">Ubah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
