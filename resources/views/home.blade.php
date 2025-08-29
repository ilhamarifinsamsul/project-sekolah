@extends('layouts.app')
@section('content')

<div class="text-center mb-5">
  <h1>Selamat Datang di Sekolah Kita</h1>
  <p>Sekolah unggulan dengan pendidikan terbaik untuk masa depan cerah.</p>
</div>

<!-- Berita -->
<h3 class="mb-3">Berita Terbaru</h3>
<div class="d-flex flex-wrap justify-content-center gap-3 mb-5">
  @foreach($news as $item)
    <div class="card shadow-sm" style="width: 18rem;">
      <img src="{{ asset($item->image) }}" class="card-img-top" alt="{{ $item->title }}">
      <div class="card-body">
        <h5 class="card-title">{{ $item->title }}</h5>
        <p class="card-text text-truncate" style="max-height: 4.5em; overflow: hidden;">
          {{ $item->content }}
        </p>
        <a href="{{ url('/news') }}" class="btn btn-sm btn-primary">Baca Selengkapnya</a>
      </div>
    </div>
  @endforeach
</div>

<!-- Kegiatan -->
<h3 class="mb-3">Kegiatan Sekolah</h3>
<div class="d-flex flex-wrap justify-content-center gap-3">
  @foreach($activities as $item)
    <div class="card shadow-sm" style="width: 18rem;">
      <img src="{{ asset($item->image) }}" class="card-img-top" alt="{{ $item->title }}">
      <div class="card-body">
        <h5 class="card-title">{{ $item->title }}</h5>
        <p class="card-text text-truncate" style="max-height: 4.5em; overflow: hidden;">
          {{ $item->description }}
        </p>
        <a href="{{ url('/activities') }}" class="btn btn-sm btn-success">Lihat Detail</a>
      </div>
    </div>
  @endforeach
</div>

@endsection

@push('scripts')
@endpush
