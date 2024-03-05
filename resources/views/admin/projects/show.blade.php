@extends('layouts.app')

@section('page-title', '{{ $project->name}}')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-success">
                        Progetto: {{ $project->name}}
                    </h1>
                    <br>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
