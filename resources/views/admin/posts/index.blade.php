@extends('layouts.admin')

@section('title') | Elenco post @endsection

@section('content')
<div class="container">
    <div class="row">
        <h1>
          Elenco posts
        </h1>

        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">TITOLO</th>
              <th scope="col">AZIONI</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post)
              <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->content}}</td>
                <td>XXX</td>
              </tr> 
            @endforeach
            
          </tbody>
        </table>

    </div>
</div>
@endsection
