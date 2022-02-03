@extends('layouts.admin')

@section('title') | Nuovo post @endsection

@section('content')
<div class="container">
    
  <h1>
    Nuovo post
  </h1>
  
  <form style="width:300px" class="my-5"
  action="{{ route('admin.post.store') }}"
  method="POST">
  @csrf
    
    <div class="mb-3">
      <label for="title" class="form-label">Titolo</label>
      <input type="text" 
    
      name="title" class="form-control"
      id="title" placeholder="Titolo">
    </div>
    
    <div class="my-4">
      <label for="text" class="form-label">Testo</label>
      <textarea type="text" 
    
      name="content" class="form-control"
      id="title" placeholder="Testo del post"></textarea>
    </div>


    <button type="submit" class="btn btn-primary my-5 mx-2">Invia</button>
    <button type="reset" class="btn btn-danger my-5 mx-2">Reset</button>
    
    
</div>
@endsection
