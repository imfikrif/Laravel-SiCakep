@extends('layout')
@section('content')

<div class="row mb-3">
    <div class="col-lg-12">
        <div class="row">
            <div class="col" style="width: 630px;">
                <div class="card shadow-sm mb-3">

                    <!-- Judul -->
                    <div class="card-header py-3">
                        <p class="text-dark-500 m-0 font-weight-bold">Tambah Data</p>
                    </div>

                    <!-- isian form -->
                    <div class="card-body">
                        <form action="{{ route('penduduk-lahir.create') }}" method="post">
                            <?= csrf_field(); ?>
                            <div class="form-row">

                                <!-- kolom kiri -->
                                <div class="col-md-6 px-2">

                                    <div class="form-group">
                                        <strong>Nama</strong>
                                        <input type="text" name="nama" class="form-control" placeholder="Masukan nama bayi" required>
                                    </div>

                                    <div class="form-group">
                                        <strong>Tanggal Lahir</strong>
                                        <input type="date" name="tanggal_lahir" class="form-control" placeholder="Pilih tanggal lahir" required>
                                    </div>

                                </div>

                                <!-- kolom kanan -->
                                <div class="col-md-6 px-2">

                                    <div class="form-group">
                                        <strong>Jenis Kelamin</strong>
                                        <select name="jenis_kelamin" class="form-control">
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <strong>Keluarga</strong>
                                        <!-- <input type="text" name="kepala_keluarga" class="form-control" placeholder="Masukan kepala keluarga" required> -->
                                        <select name="keluarga" class="form-control select-nik" style="padding:40px !important">
                                            @foreach($nik as $item)
                                            <option value="{{ $item->nomor }}"> {{ $item->nomor . "-" . $item->kepala_keluarga }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- <label class="input-group-text" for="inputGroupFile02">Upload -->
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