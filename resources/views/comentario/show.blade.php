@extends('layouts.app')

@section('template_title')
    {{ $comentario->name ?? "{{ __('Show') Comentario" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Comentario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('comentarios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <p><strong>Comentario:</strong> {{ $comentario->comentario }}</p>
                        <p><strong>Canción:</strong> {{ $comentario->cancion->nombre }}</p>
                        <p><strong>Artista:</strong> {{ $comentario->artista->nombre }}</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
