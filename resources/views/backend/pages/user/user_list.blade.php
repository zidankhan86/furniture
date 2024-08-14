
<div class="container">
        <div class="container">
            <div class="container">
<br>
<h4 class="text-success text-center"><b>USERS</b></h4>
<br>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Serial</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Phone</th>
            <th scope="col">Role</th>
            
        </tr>
    </thead>
    <tbody>
        @php
        $id = 1;
        @endphp

        @foreach ($users as $item)
        <tr>
            <th scope="row">{{ $id++ }}</th>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->address }}</td>
            <td>{{ $item->phone }}</td>
            <td>{{ $item->role }}</td>

        </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>

</div>


