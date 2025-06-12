@extends('layouts.layout')
@section('title')
    Dashboard
@endsection
@section('content')

    <h1>SELAMAT DATANG {{ strtoupper($firstName . ' ' . $lastName) }}</h1>
    <h2>Terimakasih telah bergabung di sanberbook. Social Media kita bersama</h2>

@endsection