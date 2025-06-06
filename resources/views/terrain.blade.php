@extends('layouts.application')

@section('content')
    <h1>Liste des Terrains</h1>
    <a href="{{ route('terrain.create') }}" type="button bg-outline-primary" class="btn btn-primary float-end mb-2"
       data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="tooltip-primary"
       data-bs-title="Ajouter un terrain">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle"
             viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
            <path
                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
        </svg>
    </a>
    <table id="myDataTable" class="display" style="width:100%">
        <thead>
        <tr>
            <th>ID</th>
            <th>Zone</th>
            <th>Superficie</th>
            <th>Created_at</th>
            <th>Updated_at</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>

        @foreach ($terrain as $s)
            <tr>
                <td>{{ $s->id }}</td>
                <td>{{ $s->zone }}</td>
                <td>{{ $s->superficie }}</td>
                <td>{{ $s->created_at }}</td>
                <td>{{ $s->updated_at }}</td>
                <td class="d-flex">
                    <a href="{{ route('terrain.edit',$s) }}" type="button" class="btn btn-outline-primary me-2" data-bs-toggle="tooltip"
                       data-bs-placement="left" data-bs-custom-class="tooltip-primary" data-bs-title="Modifier ce terrain">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path
                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                            <path fill-rule="evenodd"
                                  d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                        </svg>
                    </a>
                    <form action="{{ route('terrain.destroy',$s) }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-outline-danger" data-bs-toggle="tooltip"
                                data-bs-placement="right" data-bs-custom-class="tooltip-danger"
                                data-bs-title="Supprimer ce terrain">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                <path
                                    d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
                            </svg>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="m-3">
        {{ $terrain->links() }}
    </div>
@endsection
