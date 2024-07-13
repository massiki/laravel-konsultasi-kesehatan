<x-layout>
  <x-slot:title>Create Questions</x-slot:title>
  <section class="p-2">
    <div class="row p-3">
      <div class="col-md-8 mx-auto">
        <form action="/questions" method="post">
          @csrf

          <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title"
              placeholder="Masukan Judul Pertanyaan" value="{{ old('title') }}">
          </div>
          @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content" rows="3" placeholder="Masukan Isi Pertanyaan">{{ old('content') }}</textarea>
          </div>
          @error('content')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <div class="mb-3">
            <label for="content" class="form-label">Tag</label>
            <select name="tag_id" class="form-select" aria-label="Default select example">
              <option></option>
              @foreach ($tags as $tag)
                <option value="{{ $tag->id }}" {{ old('tag_id') == $tag->id ? 'selected' : '' }}>
                  {{ $tag->name }}</option>
              @endforeach
            </select>
          </div>
          @error('tag_id')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <button type="submit" class="btn btn-primary my-2">Post</button>
        </form>

      </div>

    </div>

  </section>
</x-layout>
