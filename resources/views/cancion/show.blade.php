@extends('layouts.app')

@section('template_title')
    {{ $cancion->name ?? "{{ __('Show') Cancion" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Cancion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cancions.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $cancion->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Album:</strong>
                            {{ $cancion->album }}
                        </div>
                        <div class="form-group">
                            <strong>Artista Id:</strong>
                            {{ $cancion->artista_id }}
                        </div>
                        <div class="form-group">
                            <strong>Duracion:</strong>
                            {{ $cancion->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Pista:</strong>
                            {{ $cancion->stock }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
