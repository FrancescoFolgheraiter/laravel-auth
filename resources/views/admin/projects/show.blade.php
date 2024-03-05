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
                    <hr>
                    @if ($project->thumb==null)
                        Non ci sono immagini
                    @else
                        <img src="{{ $project->thumb }}" alt="{{ $project->name}}">
                    @endif
                    <p class="card-text">{{ $project->description}}</p>
                    <div>
                        <div>
                            <h5>Tecnologie utilizzate</h5>
                            <ul>
                                @php
                                    $technologies = explode(" ",$project->technologies)
                                @endphp
                                @foreach ($technologies  as $technologie)
                                    <li>
                                        {{ $technologie }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div>
                            <h5>Tecnologie utilizzate</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
