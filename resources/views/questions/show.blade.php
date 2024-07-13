<x-layout>
  <x-slot:title>Answer</x-slot:title>
  <section class="p-2">
    <div class="p-3">
      <div class="d-flex justify-content-between my-2">
        <h2 class="m-0">Questions</h2>
        @guest
          
        @else
          <a href="/answer/{{ $question->id }}/create" class="btn btn-primary">+ Answer</a>
        @endguest
      </div>

      <div class="border border-1 rounded mb-3">
        <div class="rounded p-3 bg-light">
          <div class="row d-flex align-items-center justify-content-between">
            <div class="col-sm-12 col-md-6">
              <div class="d-flex align-items-center flex-wrap mb-2">
                <div class="mx-2">
                  <img src="{{ asset('img/pp.png') }}" width="125">
                </div>
                <div class="mx-2">
                  <h5 class="fw-bolder">{{ $user->name }}</h5>
                  <span class="rounded bg-dark-subtle p-1">{{ $user->role }}</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <h5 class="p-2">{{ $question->title }}</h5>
        <p class="p-2">{{ $question->content }}</p>
      </div>

      <h2>All answer</h2>

      @foreach ($answer as $answer)        
      <div class="border border-1 rounded mb-3">
        <div class="rounded p-3 bg-light">
          <div class="row d-flex align-items-center justify-content-between">
            <div class="col-sm-12 col-md-6">
              <div class="d-flex align-items-center flex-wrap">
                <div class="mx-2">
                  <img src="{{ asset('img/pp.png') }}" class="img-fluid" width="125">
                </div>
                <div class="mx-2">
                  <h5 class="fw-bolder">{{ $answer->user->name }}</h5>
                  <span class="rounded bg-dark-subtle p-1">{{ $answer->user->role }}</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <p class="p-2">{{ $answer->answer }}</p>
      </div>
      @endforeach

    </div>

  </section>
</x-layout>