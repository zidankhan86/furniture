@extends('backend.master')

@section('content')
    <div class="container-fluid mt-4">
        <!-- Report Header -->
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <!-- Title -->
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h2 class="text-primary">Order Report</h2>
                            <button onclick="printDiv('orderReport')" class="btn btn-outline-primary">
                                 Print
                            </button>
                        </div>

                        <!-- Search Form -->
                        <form action="{{ route('order.report.search') }}" method="get" class="bg-light p-4 rounded mb-4">
                            <div class="row">
                                <!-- From Date -->
                                <div class="col-md-4">
                                    <label for="from_date" class="font-weight-bold">From Date</label>
                                    <input type="date" name="from_date" class="form-control" id="from_date" required>
                                </div>

                                <!-- To Date -->
                                <div class="col-md-4">
                                    <label for="to_date" class="font-weight-bold">To Date</label>
                                    <input type="date" name="to_date" class="form-control" id="to_date" required>
                                </div>

                                <!-- Search Button -->
                                <div class="col-md-2 d-flex align-items-end">
                                    <button type="submit" class="btn btn-success w-100">
                                        </i> Search
                                    </button>
                                </div>
                            </div>
                        </form>

                        <!-- Order Report Table -->
                        <div id="orderReport">
                            <table class="table table-bordered table-hover table-striped">
                                <thead class="thead-danger">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Customer Name</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($orders))
                                        @foreach ($orders as $key => $order)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $order->name }}</td>
                                                <td>{{ number_format($order->price, 2) }} Tk.</td>
                                                <td>{{ $order->full_name }}</td>
                                                <td>{{ $order->address }}</td>
                                                <td>{{ $order->phone }}</td>
                                                <td>{{ $order->email }}</td>
                                                <td>
                                                    <span class="badge badge-{{ $order->status == 'Completed' ? 'success' : 'warning' }}">
                                                        {{ $order->status }}
                                                    </span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="8" class="text-center">No orders available</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Print Script -->
    <script>
        function printDiv(divId) {
            var printContents = document.getElementById(divId).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>
@endsection
