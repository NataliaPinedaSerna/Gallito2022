@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">
            <h1> Crear una Nueva Publicación </h1>
        </div>

        <div class="row">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <div class="row">


            {!! Form::open([ 'route'=>'posts.store' , 'method'=>'post' ]) !!}

                <div class="mb-3">

                    <label for="content" class="form-label"> Contenido </label>

                    {!! Form::textarea('content' , '' , [ 'class'=>"form-control" , 'rows'=>3 , 'required'=>"true" , 'placeholder'=>"Contenido del Post"]) !!}

                </div>

                <button type="submit" class="btn btn-primary"> Publicar </button>

            {!! Form::close() !!}

        </div>

    </div>

@endsection
