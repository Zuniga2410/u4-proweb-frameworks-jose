@extends('layouts.app')

@section('template_title')
    {{ $libro->name ?? 'Show Libro' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Libro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('libros.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $libro->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $libro->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Editorial:</strong>
                            {{ $libro->editorial }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
