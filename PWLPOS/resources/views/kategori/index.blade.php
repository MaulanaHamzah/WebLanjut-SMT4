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
                <th>Action</th> <!-- Tambahkan kolom untuk aksi -->
            </tr>
        </thead>
    </table>
@stop

@push('js')
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
                    { 
                        data: 'kategori_id', 
                        name: 'action',
                        orderable: false,
                        searchable: false,
                        render: function(data, type, row) {
                            return `
                                <a href="/kategori/${data}/edit" class="btn btn-sm btn-warning">Edit</a>
                            `;
                        }
                    }
                ]
            });
        });
    </script>
@endpush