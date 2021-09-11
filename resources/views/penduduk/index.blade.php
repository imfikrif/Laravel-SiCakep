@extends('layout')
@section('content')
<div class="card border-0 shadow-sm">
  <div class="card-body">
    <div class="d-flex justify-content-between mb-5">
      <h5>Penduduk</h5>
      <div>
        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal_import_data">
          <i class="fas fa-fw fa-file-import"></i>
          Import
        </button>
        <a href="{{ route('penduduk.tambah') }}" class="btn btn-danger btn-sm">
          <i class="fas fa-fw fa-plus"></i>
          Tambah Data
        </a>
      </div>
    </div>

    <table class="table table-bordered" id="table-penduduk">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">NIK</th>
          <th scope="col">Nama</th>
          <th scope="col">Tanggal Lahir</th>
          <th scope="col">Action</th>
        </tr>
      </thead>  
    </table>
  </div>
</div>

<!-- modal import -->
<div class="modal fade" id="modal_import_data" tabindex="-1" role="dialog" aria-labelledby="modal_import_data" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form method="POST" enctype="multipart/form-data" action="">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Import Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>File Import</label>
                        <input type="file" class="form-control" name="file" id="file_import_data" required onChange="validasiFile()">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger font-weight-bold btn-block">Import</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
  $(function(){
      $('#table-penduduk').DataTable({
          processing: true,
          serverSide: true,
          ajax: '{!! url("/penduduk/store-data") !!}',
          columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex'},
            { data: 'nik', name: 'nik'},
            { data: 'nama', name: 'nama'},
            { data: 'tanggal_lahir', name: 'tanggal_lahir'},
            { data: 'button', name: 'button'},
          ],
          columnDefs: [
            {
              "targets": 0, // your case first column
              "className": "text-center",
              "width": "4%"
            },
            {
              "targets": 4,
              "className": "text-center",
              "width": "4%"
            }
          ],
      });
  });

  $(document).on("click", ".delete-data", function() {
    var id   = $(this).data('id');
    console.log(id);
    Swal.fire({
      title: 'Hapus Data',
      text: "Apakah kamu ingin menghapus data ini?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya',
      cancelButtonText: `Tidak`,
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: '{!! url("/penduduk/delete") !!}',
          data: {
            id  : id,
          },
          method: "GET",
          success: function(response) {
            Swal.fire('Berhasil!', '', 'success');
            $('#table-penduduk').DataTable().ajax.reload();
          },
          error: function(response) {
            Swal.fire("Gagal", "Data gagal dihapus", "error");
          },
        });
      }
    });
  });
</script>
@endsection
