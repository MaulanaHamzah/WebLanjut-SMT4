@extends('adminlte::page')

@section('title', 'Daftar User')

@section('content_header')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Daftar User</h1>
        <a href="{{ route('user.create') }}" class="btn btn-primary">Add User</a>
    </div>
@stop

@section('content')
    <table id="user-table" class="table table-bordered">
        <thead>
            <tr>
                <th>User ID</th>
                <th>Username</th>
                <th>Nama</th>
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
            $('#user-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('user.data') }}",
                columns: [
                    { data: 'user_id', name: 'user_id' },
                    { data: 'username', name: 'username' },
                    { data: 'nama', name: 'nama' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'updated_at', name: 'updated_at' },
                    { data: 'action', name: 'action', orderable: false, searchable: false }
                ]
            });
        });

        $(document).on('click', '.deleteUser', function() {
            let id = $(this).data('id');
            if (confirm('Apakah Anda yakin ingin menghapus user ini?')) {
                $.ajax({
                    url: '/user/' + id,
                    type: 'DELETE',
                    data: { _token: '{{ csrf_token() }}' },
                    success: function(response) {
                        alert(response.success);
                        $('#user-table').DataTable().ajax.reload();
                    }
                });
            }
        });
    </script>
@endpush