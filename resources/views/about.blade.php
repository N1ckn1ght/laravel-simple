@extends('layouts.app')

@section('title', 'About')

@section('content')
    <h1>What's this all about?</h1><br>
    <p>This is a test project on Laravel.</p>
    <p>It's pretty simple.</p><br>
    <h1>Contact me!</h1><br>
    <p>abcdefghijklmnopqrstuvwxyz@1234567890.zxc</p>
    <p>Ilya Efimov</p>
@endsection

@section('side')
    @parent
@endsection
