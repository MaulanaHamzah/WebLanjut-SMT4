@extends('layout.app')

@section('subtitle', 'Kategori')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Kategori')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Manage Kategori</div>
        <div class="card-body">
            <table id="kategoriTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Kategori ID</th>
                        <th>Kategori Kode</th>
                        <th>Kategori Nama</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
$(document).ready(function() {
    $('#kategoriTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('kategori.data') }}",
        columns: [
            { data: 'kategori_id', name: 'kategori_id' },
            { data: 'kategori_kode', name: 'kategori_kode' },
            { data: 'kategori_nama', name: 'kategori_nama' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' }
        ]
    });
});
</script>
@endpush