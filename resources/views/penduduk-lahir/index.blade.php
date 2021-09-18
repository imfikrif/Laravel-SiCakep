@extends('layout')
@section('content')
<div class="card border-0 shadow-sm">
  <div class="card-body">
    <div class="d-flex justify-content-between mb-5">
      <h5>Penduduk Lahir</h5>
      <div>
        <button class="btn btn-import btn-sm" data-toggle="modal" data-target="#modal_import_data">
          <i class="fas fa-fw fa-file-import"></i>
          Import
        </button>
        <a href="{{ route('penduduk-lahir.tambah') }}" class="btn btn-primary btn-sm">
          <i class="fas fa-fw fa-plus"></i>
          Tambah Data
        </a>
      </div>
    </div>

    <table class="table table-bordered" id="table-penduduk-lahir">
      <thead>
        <tr class="text-center">
          <th scope="col">No</th>
          <th scope="col">Nama Bayi</th>
          <th scope="col">Tanggal Lahir</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Keluarga</th>
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
                        <input type="file" name="file" id="file_import_data" required onChange="validasiFile()">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary font-weight-bold btn-block">Import</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
  $(function(){
      $('#table-penduduk-lahir').DataTable({
          processing: true,
          serverSide: true,
          ajax: '{!! url("/penduduk-lahir/store-data") !!}',
          columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex'},
            { data: 'nama', name: 'nama'},
            { data: 'tanggal_lahir', name: 'tanggal_lahir'},
            { data: 'jenis_kelamin', name: 'jenis_kelamin'},
            { data: 'no_kk', name: 'no_kk'},
            { data: 'button', name: 'button'},
          ],
          columnDefs: [
            {
              "targets": 0, // your case first column
              "className": "text-center",
            },
            {
              "targets": 5,
              "className": "text-center",
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
          url: '{!! url("/penduduk-lahir/delete") !!}',
          data: {
            id  : id,
          },
          method: "GET",
          success: function(response) {
            Swal.fire('Berhasil!', '', 'success');
            $('#table-penduduk-lahir').DataTable().ajax.reload();
          },
          error: function(response) {
            Swal.fire("Gagal", "Data gagal dihapus", "error");
          },
        });
      }
    });
  });

  $(document).on("click", ".edit-data", function() {
    var id   = $(this).data('id');
    window.location.href = "/penduduk-lahir/ubah-data/" +id;
  });

</script>
@endsection
