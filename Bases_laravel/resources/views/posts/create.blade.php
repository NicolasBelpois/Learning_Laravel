@extends ('layouts.master')

@section ('content')

<div class="col-md-8 blog-main">
  <h1>Publier un post</h1>
    <hr>
      <form method="POST" action="/posts">
        @csrf
        <div class="form-group" >
          <label for="title">Titre :</label>
          <input type="text" class="form-control" id="title" name='title'>
        </div>
        <div class="form-group">
          <label for="Text">Text</label>
          <textarea name="body" id="body" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <label for="exampleInputFile">File input</label>
          <input type="file" id="exampleInputFile">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Publier</button>
        </div>
      </form>
      @include ('layouts.error')
</div>


@endsection
