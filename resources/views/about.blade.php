@extends('layouts.app')

@section('content')
<div class="row align-items-center">
  <!-- Kolom teks -->
  <div class="col-md-6 mb-4 mb-md-0">
    <h2>Tentang Kami</h2>
    <p>
      Sekolah Kita berdiri sejak 1990 dengan visi mencetak generasi cerdas, berkarakter, dan berprestasi.
      Kami berkomitmen memberikan pendidikan terbaik melalui program akademik dan non-akademik yang unggul.
    </p>
    <p>
      Dengan dukungan tenaga pendidik profesional dan fasilitas modern, Sekolah Kita siap membimbing siswa
      untuk meraih masa depan yang gemilang.
    </p>
  </div>

  <!-- Kolom gambar -->
  <div class="col-md-6 text-center">
    <img src="{{ asset('assets/asset/img/sekolah.jpg') }}"
         class="img-fluid rounded shadow-lg"
         alt="Foto Sekolah">
  </div>
</div>
@endsection

@push('scripts')
@endpush

