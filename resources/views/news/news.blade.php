@extends('layouts.app')

@section('content')

{{-- Berita --}}
<h2>Berita Terbaru</h2>
<div class="row">
  @foreach($news as $item)
  <div class="col-md-4 mb-3">
    <div class="card">
      <img src="{{ asset($item->image) }}" class="card-img-top" alt="{{ $item->title }}">
      <div class="card-body">
        <h5 class="card-title">{{ $item->title }}</h5>
        <p class="card-text">{{ Str::limit($item->content, 30) }}</p>
      </div>
      <div class="card-footer">
        <a href="{{ route('news.show', $item->id) }}" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection

@push('scripts')

@endpush
