@extends('layouts.app')
@section('content')
    <table style="border:5px ;margin-left:auto;margin-right:auto; cellspacing:5px; cellpadding:5px ">        
        <tr>
        <th>Sr. No</th>
        <th>Name</th>
        <th>City</th>
        <th>Gender</th>                        
        </tr>
        @foreach( $crudApi as $api) 
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $api->name }}</td>
            <td>{{ $api->city }}</td>
            <td>{{ $api->gender }}</td>
        </tr>
        @endforeach
    </table>
  <center>{{ $crudApi->links() }}</center>
@endsection