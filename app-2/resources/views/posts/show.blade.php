@extends ('layouts.master')

@section ('content')

<div class="col-md-8 blog-main">

  <h1>{{$post->title}}</h1>

    {{$post->body}}

      <hr>

        @foreach ($post->comments as $comment)

          <ul class="list-group">

            <li class="list-group-item">

              <strong>{{ $comment->created_at->diffForHumans() }} : &nbsp;</strong>

              {{$comment->body}}

            </li>

          </ul>

        @endforeach

</div>



<div class="col-md-8 blog-main">

  <hr>

  <div class="card">

    <div class="card-block">

      <form method="POST" action="/posts/{{$post->id}}/comments">
          @csrf
        <div class="form-group">

          <textarea name="body" placeholder="Tapez votre commentaire ici." class="form-control" required></textarea>

        </div>

        <div class="form-group">

            <button type="submit" class="btn btn-primary">Publier Commentaire

            </button>

        </div>

      </form>
      @include('layouts.error')
    </div>

  </div>

</div>
@endsection
