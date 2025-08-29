@extends('layouts.app')
@section('content')

<div class="container my-5">
  <div class="row align-items-center">
    <!-- Gambar -->
    <div class="col-md-6 mb-3 mb-md-0">
      <img src="{{ asset($activity->image) }}" class="img-fluid rounded shadow" alt="{{ $activity->title }}">
    </div>

    <!-- Deskripsi -->
    <div class="col-md-6">
      <h2>{{ $activity->title }}</h2>
      {{-- <p class="text-muted">Dilaksanakan pada: {{ $activity->created_at->format('d M Y') }}</p> --}}
      <p>{{ $activity->description }}</p>
      <a href="{{ url('/activities') }}" class="btn btn-secondary mt-3">← Kembali</a>
    </div>
  </div>
</div>

@endsection
