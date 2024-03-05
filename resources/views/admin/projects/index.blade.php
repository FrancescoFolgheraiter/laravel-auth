@extends('layouts.app')

@section('page-title', 'Progetti-realizzati')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-success">
                        Progetti realizzati
                    </h1>
                    <hr>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Tecnologie utilizzate</th>
                                <th scope="col">Data inizio</th>
                                <th scope="col">Ultimo aggiornamento</th>
                                <th scope="col">Totale ore</th>
                                <th scope="col">Azioni</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $project)
                            <tr>
                                <th scope="row">{{ $project->name }}</th>
                                <td>{{ $project->technologies }}</td>
                                <td>{{ $project->start_date }}</td>
                                <td>{{ $project->last_update_date }}</td>
                                <td>{{ $project->total_hours }}</td>
                                <td>
                                    <a href="{{ route('admin.projects.show', ['project' => $project->slug]) }}" class="btn btn-xs btn-primary">
                                        Vedi
                                    </a>
                                    <a href="{{ route('admin.projects.edit', ['project' => $project->slug]) }}" class="btn btn-warning">
                                        Modifica
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
@endsection
