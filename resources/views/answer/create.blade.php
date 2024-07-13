<x-layout>
  <x-slot:title>Create Answer</x-slot:title>
  <section class="p-2">
    <div class="row p-3">
      <div class="col-md-8 mx-auto">

        <form action="/answer" method="post">
          @csrf

          <input type="hidden" readonly name="question_id" value="{{ $question->id }}">

          <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" readonly id="title" value="{{ $question->title }}">
          </div>

          <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" rows="3" readonly >{{ $question->content }}</textarea>
          </div>

          <div class="mb-3">
            <label for="content" class="form-label">Answer</label>
            <textarea class="form-control" id="content" rows="3" name="answer" placeholder="Masukan Isi Tanggapan"></textarea>
          </div>
          @error('answer')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <button type="submit" class="btn btn-primary my-2">Post</button>
        </form>

      </div>

    </div>

  </section>
</x-layout>
