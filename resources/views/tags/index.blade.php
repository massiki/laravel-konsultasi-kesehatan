<x-layout>
  <x-slot:title>Questions</x-slot:title>
  <section class="p-2">
    <div class="p-3">
      <div class="d-flex justify-content-between my-2">
        <h2 class="m-0">{{ $title_tag->name }}</h2>
        @guest
        @else
          <a href="/questions/create" class="btn btn-primary">+ Question</a>
        @endguest
      </div>

      @foreach ($questions as $question)
      <div class="border border-1 rounded mb-3">
        <div class="rounded p-3 bg-light">
          <div class="row d-flex align-items-center justify-content-between">
            <div class="col-sm-12 col-md-6">
              <div class="d-flex align-items-center flex-wrap mb-2">
                <div class="mx-2">
                  <img src="{{ asset('img/pp.png') }}" width="125">
                </div>
                <div class="mx-2">
                  <h5 class="fw-bolder">{{ $question->user->name }}</h5>
                  <span class="rounded bg-dark-subtle p-1">{{ $question->user->role }}</span>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div class="d-flex align-items-center justify-content-end flex-wrap grid gap-2">
                <div class="rounded bg-dark-subtle p-1 hover-underline">
                  <span class="text-decoration-none text-black">{{ $question->tag->name }}</span>
                </div>
                <div class="rounded bg-info p-2 fw-bolder hover-underline">
                  <a href="/questions/{{ $question->id }}" class="text-decoration-none text-black">
                    Jawaban
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <h5 class="p-2">{{ $question->title }}</h5>
      </div>
      @endforeach

      {{ $questions->links('pagination::simple-bootstrap-5') }}

    </div>

  </section>
</x-layout>