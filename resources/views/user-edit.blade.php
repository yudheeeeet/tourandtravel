@extends('layoutUser.master')
@section('content')

<main class="m-4">
  <div class="container-fluid px-4">
    <div class="col-md-12">
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      <div class="card-body" style="text-align: left;">
        <h3 class="mb-3">Edit Akun</h3>
        <form action="/update_user/{{ $user->id }}" method="POST">
          @csrf
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">Nama</span>
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="name" value="{{ $user->name }}">
          </div>
          
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon4">HP (WA)</span>
            <input type="tel" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{ $user->hp }}" name="hp">
          </div>
          
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon4">Jenis Kelamin</span>
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{ $user->jk }}" name="jk">
          </div>
          
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon6">Nama Bank</span>
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="bank" value="{{ $user->bank }}">
          </div>

          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon6">No. Rek</span>
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="rekening" value="{{ $user->rekening }}">
          </div>

          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon6">Email</span>
            <input type="email" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="email" value="{{ $user->email }}">
          </div>
          <button class="button button-primary button-pipaluk" type="submit" style="text-decoration: none;">Edit</button>
        </form>    
      </div>
    </div>
  </div>
</main>


@endsection