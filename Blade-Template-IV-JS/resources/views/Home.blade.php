@push('style')
    <link rel="stylesheet" href="css/style.css">    
@endpush

@extends('MainLayout')

@section('content')
    <h1>Home Page</h1>
@endsection

@push('scripts')

    <script src="main.js"></script>

    @prepend('style')
        <style>
        body{
            color:green;
        }
        </style>
    @endprepend
    
@endpush

