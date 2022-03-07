<div class="card mb-3">

    <div class="card-body">

        <div class="row">
            <div class="col s10" >
                <h5 class="card-title"> {{ $user->name }} </h5>
            </div>
            <div class="col s2" style='text-align:right'>

                <a href="{{ route('posts.edit', $post->id) }}">
                    <i class="fa-solid fa-pen-to-square" title="Editar Post"></i>
                </a>

                <a href="{{ route('posts.destroy', $post->id) }}">
                    <i class="fa-solid fa-trash-can" title="Eliminar Post"></i>
                </a>

            </div>
        </div>

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
