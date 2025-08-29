@extends('layouts.app')

@section('content')
<h2>Kritik & Saran</h2>
{{-- Menampilkan pesan sukses --}}
@if(session('success'))
  <div class="alert alert-success alert-dismissible fade show" id="success-alert">
    {{ session('success') }}
  </div>
@endif


<div class="row justify-content-center">
  <div class="col-md-6">
    <div class="card shadow-lg rounded-4">
      <div class="card-header bg-primary text-white text-center rounded-top-4">
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('contact.store') }}">
          @csrf
          <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="name" value="{{ old('name') }}" class="form-control rounded-3 form-control rounded-3 @error('name') is-invalid @enderror">
            @error('name')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" class="form-control rounded-3 form-control rounded-3 @error('email') is-invalid @enderror">
            @error('email')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Pesan</label>
            <textarea name="message" value="{{ old('email') }}" class="form-control rounded-3 form-control rounded-3 @error('email') is-invalid @enderror" rows="4">

            </textarea>
            @error('message')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="text-end">
            <button type="submit" class="btn btn-primary rounded-3">Kirim</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
@push('scripts')
<script src="{{ asset('assets/js/scripts.js') }}"></script>

@endpush
