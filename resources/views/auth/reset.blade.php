<x-layout>
  <x-slot:title></x-slot:title>
  <div class="form-signin w-100 m-auto">

    @if (session('status'))
      <div class="alert alert-info fw-bolder">
        {{ session('status')}}
      </div>
    @endif

    <form action="{{ route('password.email') }}" method="post">
      <h1 class="h3 mb-3 fw-normal text-center fw-bolder">Reset Password</h1>
      @csrf

      <div class="form-floating mb-2">
        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
        <label for="email">Email</label>
      </div>
      @error('email')
        <span class="text-danger">{{ $message }}</span>
      @enderror
      
      <button class="btn btn-primary w-100 py-2" type="submit">Kirim</button>
  </div>
</x-layout>