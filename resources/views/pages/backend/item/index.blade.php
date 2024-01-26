@extends('layouts.backend.main')

@section('content')

                     <!-- Begin Page Content -->
                <div class="container-fluid rounded bg-white p-3">
                     @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                     @endif
                    <!-- Page Heading -->
                    
                    <a class="btn btn-primary mb-3" href="{{ route ('item.create') }}">Tambah Data</a>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Table</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="table table-warning">
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Category Id</th>
                                            <th class="text-center">Image</th>
                                            <th class="text-center">Deskripsi</th>
                                            <th class="text-center">Brand</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($item as $items)
                                        <tr>   
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $items->nama }}</td> 
                                            <td>{{ $items->category_id }}</td> 
                                            <td><img src="{{  asset('storage/' . $items->image) }}" width="80"></td>
                                            <td>{!! html_entity_decode($items->description)!!}</td>
                                            <td>{{ $items->brand }}</td>
                                            <td class="d-flex flex-row justify-content-around m-auto">
                                                <a class="btn btn-primary m-1" href="{{route('item.edit', $items)}}">Edit</a>
                                            <form action="{{ route('item.destroy', $items) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn m-1 btn-warning" onclick="return confirm('Yakin?')">Delete</button>
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
                <!-- /.container-fluid -->
    
@endsection