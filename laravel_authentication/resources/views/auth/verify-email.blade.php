@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
        <h2>Verification Email has been Sent !</h2>
    <form method="POST" action="{{ route('verification.send') }}">
    @csrf
    <input type="submit" value="Resend">
    </center>
</form>
</body>
</html>
@endsection