@extends('layouts.app')
@section('content')

<div class="text-center mb-5">
  <h1>Selamat Datang di Sekolah Kita</h1>
  <p>Sekolah unggulan dengan pendidikan terbaik untuk masa depan cerah.</p>
</div>

<!-- Berita -->
<h3 class="mb-3">Berita Terbaru</h3>
<div id="newsCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
  <div class="carousel-inner">
    @foreach($news as $key => $item)
      <div class="carousel-item @if($key == 0) active @endif">
        <div class="d-flex justify-content-center">
          <div class="card shadow-lg" style="width: 28rem;">
            <img src="{{ asset($item->image) }}" class="card-img-top" alt="{{ $item->title }}">
            <div class="card-body text-center">
              <h5 class="card-title">{{ $item->title }}</h5>
              <p class="card-text text-truncate" style="max-height: 5em; overflow: hidden;">
                {{ $item->content }}
              </p>
              <a href="{{ route('news.show', $item->id) }}" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon bg-dark rounded-circle p-2"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon bg-dark rounded-circle p-2"></span>
  </button>
</div>

<!-- Kegiatan -->
<h3 class="mb-3">Kegiatan Sekolah</h3>
<div id="activitiesCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
  <div class="carousel-inner">
    @foreach($activities as $key => $item)
      <div class="carousel-item @if($key == 0) active @endif">
        <div class="d-flex justify-content-center">
          <div class="card shadow-lg" style="width: 28rem;">
            <img src="{{ asset($item->image) }}" class="card-img-top" alt="{{ $item->title }}">
            <div class="card-body text-center">
              <h5 class="card-title">{{ $item->title }}</h5>
              <p class="card-text text-truncate" style="max-height: 5em; overflow: hidden;">
                {{ $item->description }}
              </p>
              <a href="{{ route('activities.show', $item->id) }}" class="btn btn-success btn-sm">Lihat Detail</a>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#activitiesCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon bg-dark rounded-circle p-2"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#activitiesCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon bg-dark rounded-circle p-2"></span>
  </button>
</div>

@endsection
