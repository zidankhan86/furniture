@extends('backend.master')

@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
            <div class="card-title">
                <a class="btn btn-warning float-end ml-2" href="{{ route('product.form') }}">+ Add
                    </a>
                <h4 style="text-align: center"><b>Furnitures</b></h4>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Image</th>
                            <th scope="col"> Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $id = 1;
                    @endphp
                    @foreach ($products as $item)
                        <tr>
                            <th scope="row">{{ $id++ }}</th>
                            <td><img height="100px" width="100px" src="{{ url('/public/uploads/' . $item->image) }}" alt="">
                            </td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->ProductCategory->type }}</td>
                            <td>{{ $item->stock }}</td>
                            <td>{{ $item->price }} Tk.</td>
                            <td>{{ $item->status == 1 ? 'Active' : ($item->status == 2 ? 'Trending' : 'Inactive') }}</td>
                            <td>
                                <a href="{{ route('product.edit', $item->id) }}" class="btn btn-success">Edit</a>
                               
                                <a href="{{ route('product.delete', $item->id) }}" class="btn btn-danger"
                                    onclick="return confirm('Do you want to delete ?')">Delete</a>
        
        
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
</div>
@endsection
