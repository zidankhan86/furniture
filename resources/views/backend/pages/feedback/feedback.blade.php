@extends('backend.master')

@section('content')

<div class="container">
<div class="container">

<div class="container">



 <br><h4 class="text-success text-center">User Feedback</h4><br>



<table class="table">
    <thead>
      <tr>
        <th scope="col">serial</th>
        <th scope="col"> Name</th>
        <th scope="col"> Message</th>
        
      </tr>
    </thead>
    <tbody>
        @php
            $serial =1;
        @endphp

        @foreach ($feedback as $item)
      <tr>


        <th scope="row">{{ $serial++}}</th>
        <td>{{ $item->name}}</td>
      


        <td>
            <a href="{{route('contact.view' ,$item->id)}}"> <B>See More</B></a>


        </td>
  

      </tr>
      @endforeach

    </tbody>
  </table>

  </div>
</div>
</div>

@endsection


