@extends('backend.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">



                            <br>
                            <h4 class="text-info text-center">Feedback</h4><br>



                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">SL</th>
                                        <th scope="col"> Name</th>
                                        <th scope="col"> Message</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $serial = 1;
                                    @endphp

                                    @foreach ($feedback as $item)
                                        <tr>


                                            <th scope="row">{{ $serial++ }}</th>
                                            <td>{{ $item->name }}</td>



                                            <td>
                                                <a href="{{ route('contact.view', $item->id) }}"> <B>Show</B></a>


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
