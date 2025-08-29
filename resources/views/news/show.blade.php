@extends('layouts.app')
@section('content')

<div class="container my-5">
  <div class="row align-items-center">
    <!-- Gambar -->
    <div class="col-md-6 mb-3 mb-md-0">
      <img src="{{ asset($news->image) }}" class="img-fluid rounded shadow" alt="{{ $news->title }}">
    </div>

    <!-- Deskripsi -->
    <div class="col-md-6">
      <h2>{{ $news->title }}</h2>
      {{-- <p class="text-muted">Dipublikasikan pada: {{ $news->created_at->format('d M Y') }}</p> --}}
      <p>{{ $news->content }}</p>
      <a href="{{ url('/news') }}" class="btn btn-secondary mt-3">← Kembali</a>
    </div>
  </div>
</div>

@endsection
