<x-layout>
  <x-slot:title>Halaman Login</x-slot:title>
  <div class="form-signin w-100 m-auto">
    <form action="{{ route('login') }}" method="post">
      @csrf
      <h1 class="h3 mb-3 fw-normal text-center fw-bolder">Login</h1>

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

      <div class="my-2 ">
        <a href="{{ route('password.request') }}">Lupa Password?</a>
      </div>

      <button class="btn btn-primary w-100 py-2" type="submit">Masuk</button>

      <div class="text-center my-2">
        <a href="{{ route('register') }}">Belum Memiliki akun?</a>
      </div>
    </form>
  </div>
</x-layout>