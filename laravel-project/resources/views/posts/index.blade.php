@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">投稿一覧</div>
        <div>
        <form action="{{ route('posts.search') }}" method="get">
          @csrf
          <input type="text" class="form-control input-lg" placeholder="Buscar" name="search" value="">
          <input type="submit" value="検索">
        </form>
        </div>
        @isset($search_result)
          <h5 class="card-title">{{ $search_result }}</h5>
        @endisset

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
                @foreach($posts as $post)
                    <tr>
                    <td><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></td>
                      <td>{{ $post->body }}</td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
