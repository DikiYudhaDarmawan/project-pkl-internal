@extends('layouts.admin')
@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
@endsection

@section('content')
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Tables</span> Produk</h4>
    <div class="card">
        <div class="card-header">
            <div class="float-start">
                <h5>Produk</h5>
            </div>
            <div class="float-end">
                <a href="{{ route('produk.create') }}" class="btn btn-sm btn-primary">
                    Add
                </a>
            </div>
        </div>
        <br>
        <div class="card-body">
            <table class="table-responsive text-nowrap">
                <table class="table" id="example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Kategori</th>
                            <th>Cover</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @php $i = 1; @endphp
                        @foreach ($produks as $data)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $data->nama_produk }}</td>
                                <td>{{ $data->deskripsi }}</td>
                                <td>{{ $data->harga }}</td>
                                <td>{{ $data->stok }}</td>
                                <td>{{ $data->kategori->category_name }}</td>
                                <td>
                                    @if ($data->cover)
                                        <img src="{{ asset('image/produk/' . $data->cover) }}" width="50"
                                            height="50"style="border-radius: 50%">
                                    @else
                                        No Image
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('produk.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('produk.edit', $data->id) }}" class="btn btn-sm btn-warning">
                                            Edit
                                        </a>
                                        <a href="{{ route('produk.destroy', $data->id) }}" class="btn btn-danger"
                                            data-confirm-delete="true">Delete</a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
    </div>
@endsection

@push('script')
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
    <script>
        new DataTable('#example');
    </script>
@endpush
