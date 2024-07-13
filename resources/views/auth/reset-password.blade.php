<x-layout>
  <x-slot:title></x-slot:title>
  <div class="form-signin w-100 m-auto">

    <form action="{{ route('password.update') }}" method="post">
      <h1 class="h3 mb-3 fw-normal text-center fw-bolder">Reset Password</h1>
      @csrf

      <div class="form-floating mb-2">
        <input type="hidden" class="form-control" name="token" value="{{ request('token') }}">
      </div>

      <div class="form-floating mb-2">
        <input type="email" class="form-control" readonly id="email" name="email" value="{{ old('email') }} {{ request('email') }}">
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
      
      <button class="btn btn-primary w-100 py-2" type="submit">Reset</button>
    </form>
  </div>
</x-layout>