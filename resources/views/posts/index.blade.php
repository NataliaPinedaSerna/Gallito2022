@extends('layouts.app')

@section('content')

    <div class="container">

        <h1>Publicaciones de {{$user->name}}</h1>

        @forelse ($posts as $post)

            <div class="card mb-3">
                <div class="card-body">
                <h5 class="card-title"> {{ $user->name }} </h5>
                <div class="row">
                    <div class="col s6" >
                        <h6 class="card-subtitle mb-2 text-muted"> {{ $post->created_at->format('d-m-Y') }}</h6>
                    </div>
                    <div class="col s6" style='text-align:right'>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $post->created_at->diffForHumans() }} </h6>
                    </div>
                </div>

                <p class="card-text"> {{ $post->content }} </p>
                </div>
            </div>

        @empty
            <div class="alert alert-info" role="alert">
                El usuario no ha publicado aún.
            </div>
        @endforelse

        <div class="mt-3">
            {{ $posts->links() }}
        </div>

    </div>

@endsection
