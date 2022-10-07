@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sending Email</title>
</head>
<body>
    <form action="{{ route('sentEmail') }}" method="POST">
        @csrf
        <fieldset>
            <center><legend>Enter Emails </legend></center>
            {{-- <center><x-email /></center> --}}
            {{-- <center> <x-email>
                <h1>enter emails</h1>   
            </x-email></center>
             --}}
            <center>
                <x-email>
                    <x-slot name="title"><h2>Enter your email address.....</h2></x-slot>
                </x-email>
            </center>

            <center><textarea name="emails" id="" cols="50" rows="3"></textarea><br> <br></center> 
            
            <center><input type="submit" value="send email"></center> 
            
        </fieldset>
    </form>
</body>
</html>
@endsection