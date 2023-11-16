@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <button type="button" class="btn btn-primary mb-3 d-block w-100" onclick="location.href='{{ route('posts.create') }}'">
                        新規投稿
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
