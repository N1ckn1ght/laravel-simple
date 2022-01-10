@extends('layouts.app')

@section('title', 'Wall')

@section('content')
    <h1>Post something on the wall!</h1><br>
    @include('includes.alerts')
    <form action="{{ route('wall-form') }}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="wall-name">Your name:</label>
            <input class="form-control" type="text" name="wall-name" id="wall-name" placeholder="Name"></input>
        </div>
        <div class="mb-3">
            <label class="form-label" for="wall-msg">Write a post:</label>
            <textarea class="form-control" name="wall-msg" id="wall-msg" rows="3" placeholder="Message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <br>
    <table class="table">
        <thread>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Message</th>
                <th scope="col">Posted at</th>
            </tr>
        </thread>
        <tbody>
            @foreach($data as $post)
                <tr>
                    <td scope="row">{{ $post->name }}</td>
                    <td>{{ $post->message }}</td>
                    <td>{{ $post->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('side')
    @parent
@endsection
