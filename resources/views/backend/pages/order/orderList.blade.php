@extends('backend.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <br>
                            <h4 class="text-info text-center"><b>Orders</b></h4>
                            <br>

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">SL</th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Email</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $id = 1;
                                    @endphp

                                    @foreach ($orders as $item)
                                        <tr>
                                            <th scope="row">{{ $id++ }}</th>
                                           
                                            <td>{{ $item->name }}</td>
                                          
                                            <td>{{ $item->price }} Tk.</td>
                                            <td>{{ $item->full_name }}</td>
                                            <td>{{ $item->address }}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>
                                                <a href="{{ route('confirm', $item->id) }}" class="btn btn-success">Confirm Order</a>
                                                <a href="{{ route('reject',$item->id) }}" class="btn btn-danger">Cancel Order</a>
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
