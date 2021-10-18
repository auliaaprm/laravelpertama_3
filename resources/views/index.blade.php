@extends('layouts.app')

@section('title', 'Friends')

@section('content')

@foreach ($friends as $friend)
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{ $friend['nama'] }}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{ $friend['no_tlp'] }}</h6>
    <p class="card-text">{{ $friend['alamat'] }}</p>
    <p class="card-text">{{ $friend['jenis_kelamin'] }}</p>
    <p class="card-text">{{ $friend['instagram'] }}</p>

    <button type="button" a href="#" class="card-link btn-warning">Edit Teman</button>
    <button type="button" a href="#" class="card-link btn-danger">Delete Teman</button>
  </div>
</div>

@endforeach
<div>
    {{ $friends->links() }}
</div>
@endsection
    