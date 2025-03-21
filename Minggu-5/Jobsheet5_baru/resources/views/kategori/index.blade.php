@extends('adminlte::page')

@section('title', 'Daftar Kategori')

@section('content_header')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Daftar Kategori</h1>
        <a href="{{ route('kategori.create') }}" class="btn btn-primary">Add Kategori</a>
    </div>
@stop

@section('content')
    <table id="kategori-table" class="table table-bordered">
        <thead>
            <tr>
                <th>Kategori ID</th>
                <th>Kategori Kode</th>
                <th>Kategori Nama</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>
@stop

@section('css')
    <!-- DataTables CSS -->
    <link rel="stylesheet" 
          href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
@stop

@push('js')
    <!-- jQuery (Jika belum ada) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#kategori-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('kategori.data') }}",
                columns: [
                    { data: 'kategori_id', name: 'kategori_id' },
                    { data: 'kategori_kode', name: 'kategori_kode' },
                    { data: 'kategori_nama', name: 'kategori_nama' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'updated_at', name: 'updated_at' },
                    { data: 'action', name: 'action', orderable: false, searchable: false } // Kolom Action
                ]
            });
        });

        // AJAX Delete Kategori
        $(document).on('click', '.deleteKategori', function() {
            let id = $(this).data('id');
            if (confirm('Apakah Anda yakin ingin menghapus kategori ini?')) {
                $.ajax({
                    url: '/kategori/' + id,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        alert(response.success);
                        $('#kategori-table').DataTable().ajax.reload();
                    }
                });
            }
        });
    </script>
@endpush