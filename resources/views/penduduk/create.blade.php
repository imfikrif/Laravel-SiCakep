@extends('layout')
@section('content')

<div class="row mb-3">
    <div class="col-lg-12">
        <div class="row">
            <div class="col" style="width: 630px;">
                <div class="card shadow-sm mb-3">

                    <!-- Judul -->
                    <div class="card-header py-3">
                        <p class="text-dark-500 m-0 font-weight-bold">Tambah Data Penduduk</p>
                    </div>

                    <!-- isian form -->
                    <div class="card-body">
                        <form action="/pendudukcontroller/save_penduduk" method="post">
                            <?= csrf_field(); ?>
                            <div class="form-row">

                                <!-- kolom kiri -->
                                <div class="col-md-6 px-2">

                                    <div class="form-group">
                                        <label for="productname"><strong>NIK</strong></label>
                                        <input class="form-control" type="text" placeholder="Masukan NIK" name="nik" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="productname"><strong>Nama</strong></label>
                                        <input class="form-control" type="text" placeholder="Masukan nama" name="nama" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="productname"><strong>Tempat Lahir</strong></label>
                                        <input class="form-control" type="text" placeholder="Masukan tempat lahir" name="tempat_lahir" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="productname"><strong>Tanggal Lahir</strong></label>
                                        <input class="form-control" type="date" placeholder="Masukan tanggal lahir" name="tanggal_lahir" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="productname"><strong>Jenis Kelamin</strong></label>
                                        <select name="jenis_kelamin" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Peremupuan</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="productname"><strong>Status Kawin</strong></label>
                                        <select name="status_kawin" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                            <option value="Belum kawin">Belum kawin</option>
                                            <option value="Sudah kawin">Sudah kawin</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="productname"><strong>Alamat</strong></label>
                                        <input class="form-control" type="text" placeholder="Masukan alamat" name="alamat" required>
                                    </div>
                                </div>

                                <!-- kolom kanan -->
                                <div class="col-md-6 px-2">

                                    <div class="form-group">
                                        <label for="productname"><strong>Pekerjaan</strong></label>
                                        <input type="text" name="pekerjaan" class="form-control" placeholder="Masukan pekerjaan" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="productname"><strong>Pendidikan</strong></label>
                                        <select name="pendidikan" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
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
                                        <label for="productname"><strong>Agama</strong></label>
                                        <select name="agama" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                            <option value="Islam">Islam</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Protestan">Protestan</option>
                                            <option value="Budha">Budha</option>
                                            <option value="Hindu">Hindu</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="productname"><strong>Lurah/Desa</strong></label>
                                        <input class="form-control" type="text" name="luran" placeholder="Masukan lurah/desa" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="productname"><strong>Kecamatan</strong></label>
                                        <input class="form-control" type="text" placeholder="Masukan kecamatan" name="kecamatan" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="productname"><strong>Kabupaten</strong></label>
                                        <input class="form-control" type="text" placeholder="Masukan kabupaten" name="kabupaten" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="productname"><strong>Provinsi</strong></label>
                                        <input class="form-control" type="text" value="Jawa Barat" name="provinsi" required>
                                    </div>
                                    <!-- <label class="input-group-text" for="inputGroupFile02">Upload</label> -->
                                </div>
                                <button class="btn btn-primary btn-block m-2" type="submit">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
