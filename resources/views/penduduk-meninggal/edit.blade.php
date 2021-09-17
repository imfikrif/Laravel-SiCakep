@extends('layout')
@section('content')

<div class="row mb-3">
    <div class="col-lg-12">
        <div class="row">
            <div class="col" style="width: 630px;">
                <div class="card shadow-sm mb-3">

                    <!-- Judul -->
                    <div class="card-header py-3">
                        <p class="text-dark-500 m-0 font-weight-bold">Tambah Data Keluarga</p>
                    </div>

                    <!-- isian form -->
                    <div class="card-body">
                        <form action="{{ route('penduduk-meninggal.update') }}" method="post">
                            <?= csrf_field(); ?>
                            <div class="form-row">

                                <!-- kolom kiri -->
                                <div class="col-md-6 px-2">
                                    <input type="hidden" value="{{ $data->id }}" name="id">
                                    <input type="hidden" value="{{ $data->nik }}" name="nik">

                                    <div class="form-group">
                                        <strong>Nama</strong>
                                        <input type="text" name="nama" value="{{ $data->nama }}" class="form-control" placeholder="Masukan nama bayi" readonly>
                                    </div>

                                    <div class="form-group">
                                        <strong>Penyebab</strong>
                                        <input type="text" name="penyebab" value="{{ $data->penyebab }}" class="form-control" placeholder="Masukan nama bayi" required>
                                    </div>
                                </div>

                                <!-- kolom kanan -->
                                <div class="col-md-6 px-2">

                                    <div class="form-group">
                                        <strong>Tanggal Wafat</strong>
                                        <input type="date" name="tanggal_wafat" value="{{ $data->tanggal_wafat }}" class="form-control" placeholder="Pilih tanggal lahir" required>
                                    </div>

                                    <div class="form-group">
                                        <strong>Pelapor</strong>
                                        <input type="text" name="pelapor" value="{{ $data->pelapor }}" class="form-control" placeholder="Masukan kepala keluarga" required>
                                    </div>
                                    <!-- <label class="input-group-text" for="inputGroupFile02">Upload -->
                                </div>

                                <button class="btn btn-primary btn-block m-2" type="submit">Selesai</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection