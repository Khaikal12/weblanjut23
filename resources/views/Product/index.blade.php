@extends('layout.be.template')
@section('title', 'Data Product')

@section('content')
    <div class="container px-4 mt-4">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">
                    <i class="fas fa-plus"></i>Tambah Data
                </a>
                <div class="card">
                    <div class="card-header" style="font-size: 20px; text-align: center"><strong>Data Product</strong></div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr style="text-align: center">
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $row)
                                    <tr style="text-align: center">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->description }}</td>
                                        <td>{{ $row->price }}</td>
                                        <td>{{ $row->category->name }}</td>
                                        <td>
                                            <form method="POST" action="{{ route('products.destroy', $row->id) }}">
                                                @csrf
                                                @method('delete')
                                                <input type="submit" value="Delete" class="btn btn-danger">
                                                <a href="{{ route('products.edit', $row->id) }}"
                                                    class="btn btn-warning">Edit</a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
