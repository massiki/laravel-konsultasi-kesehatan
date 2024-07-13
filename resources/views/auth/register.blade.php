<x-layout>
  <x-slot:title>Halaman Register</x-slot:title>
  <div class="form-signin w-100 m-auto">
    <form action="{{ route('register') }}" method="post">
      <h1 class="h3 mb-3 fw-normal text-center fw-bolder">Register</h1>
      @csrf
      <div class="form-floating mb-2">
        <input type="text" class="form-control" id="nama" name="name" value="{{ old('name') }}">
        <label for="nama">Nama</label>
      </div>
      @error('name')
        <span class="text-danger">{{ $message }}</span>
      @enderror

      <div class="form-floating mb-2">
        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
        <label for="email">Email</label>
      </div>
      @error('email')
        <span class="text-danger">{{ $message }}</span>
      @enderror

      <div class="form-floating mb-2">
        <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}">
        <label for="password">Password</label>
      </div>
      @error('password')
        <span class="text-danger">{{ $message }}</span>
      @enderror

      <div class="form-floating mb-2">
        <input type="password" class="form-control" id="password" name="password_confirmation" value="{{ old('password_confirmation') }}">
        <label for="password">Verifikasi Password</label>
      </div>

      <button class="btn btn-primary w-100 py-2" type="submit">Daftar</button>

    </form>
  </div>
</x-layout>