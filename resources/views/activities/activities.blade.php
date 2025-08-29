@extends('layouts.app')

@section('content')

{{-- Kegiatan --}}
<h2>Kegiatan Sekolah</h2>
<div class="row">
  @foreach($activities as $item)
  <div class="col-md-4 mb-3">
    <div class="card">
      <img src="{{ asset($item->image) }}" class="card-img-top" alt="{{ $item->title }}">
      <div class="card-body">
        <h5 class="card-title">{{ $item->title }}</h5>
        <p class="card-text">{{ Str::limit($item->description, 20) }}</p>
      </div>
      <div class="card-footer">
        <a href="{{ route('activities.show', $item->id) }}" class="btn btn-success btn-sm">Lihat Detail</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
@push('scripts')

@endpush
