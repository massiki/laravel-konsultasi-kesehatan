<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aplikasi Konsultasi Kesehatan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="d-flex justify-content-center align-items-center" style="height: 100vh">
    <main class="form-signin m-auto text-center">
      @if (session('status'))
        <div class="alert alert-info fw-bolder">
          {{ session('status') }}
        </div>
      @endif
      <p class="fw-bolder">Klik button di bawah ini untuk mendapatkan verifikasi email</p>
      <form action="{{ route('verification.send') }}" method="post">
        @csrf
        <button type="submit" class="btn btn-primary p-2 m-0 align-baseline">{{ _('Minta Verifikasi') }}</button>
      </form>
    </main>
  </div>
</body>

</html>
