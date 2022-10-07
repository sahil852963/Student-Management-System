@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>users details</title>
</head>
<body>
    {{--  components in laavel --}}
    <center><p>Fill the academic form : </p><a href="{{route('academic_form')}}">Academic Form</a></center><br>
    {{-- <x-academic /> --}}
        <x-table />
        @foreach($user as $users)
        <tr> 
            <td>{{ $loop->iteration}}</td> 
            <td>{{ $users->name }}</td>
            <td>{{ $users->email }}</td>
            <td>
                <button type="button"><a href="{{ route('edit', $users->id) }}">Edit</a></button> 
                {{-- <button type="button"><a href="{{ route('update', $users->id) }}">update</a></button> --}}
                <button type="button"><a href="{{ route('destroy', $users->id) }}">Delete</a></button>
            </td>
        </tr> 
        @endforeach
    </table>
    <center>{{$user->links()}}</center>
        
</body>
</html>
@endsection