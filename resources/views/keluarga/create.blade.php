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
                        <form action="{{ route('keluarga.create') }}" method="post">
                            <?= csrf_field(); ?>
                            <div class="form-row">

                                <!-- kolom kiri -->
                                <div class="col-md-6 px-2">

                                    <div class="form-group">
                                        <strong>Nomor</strong>
                                        <input type="text" name="nomor" class="form-control" placeholder="Masukan nomor keluarga" required>
                                    </div>

                                </div>

                                <!-- kolom kanan -->
                                <div class="col-md-6 px-2">

                                    <div class="form-group">
                                        <strong>Kepala Keluarga</strong>
                                        <!-- <input type="text" name="kepala_keluarga" class="form-control" placeholder="Masukan kepala keluarga" required> -->
                                        <select name="kepala_keluarga" class="form-control select-nik" style="padding:40px !important">
                                            @foreach($nik as $item)
                                            <option value="{{ $item->nik }}"> {{ $item->nik . "-" . $item->nama }}</option>
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