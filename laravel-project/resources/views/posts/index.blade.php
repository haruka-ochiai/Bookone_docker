@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">投稿一覧</div>
        
        <form method="GET" action="{{ route('posts.index') }}">
        <input type="search" placeholder="入力" name="search" value="{{ $search ?? '' }}">

            <div>
                <button type="submit">検索</button>
                <button>
                    <a href="{{ route('posts.index') }}" class="text-white">
                        クリア
                    </a>
                </button>
            </div>
        </form>

        <div class="card-body">
            <button type="button" class="btn btn-primary mb-3 d-block w-100" onclick="location.href='{{ route('posts.create') }}'">
                新規投稿
            </button>
          <div class="table-resopnsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <td>タイトル</td>
                  <th>感想</th>
                </tr>
              </thead>
              <tbody>
                @if(isset($posts))
                @foreach ($posts as $post)
                <tr>
                <td><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></td> // ここを編集
                  <td>{{ $post->body }}</td>
                </tr>
                @endforeach
                @endif
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
