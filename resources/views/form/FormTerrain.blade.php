@extends('layouts.application')

@section('content')

    <div class="card col-5 mx-auto">
        <div class="card-header">
            {{ $terrain->exists ? "Modifier" : "Ajouter" }} un terrain
        </div>
        <div class="card-body">
            <form action="{{ route($terrain->exists ? "terrain.update" : "terrain.store",$terrain) }}" method="post">
                @method($terrain->exists ? "put" : "post" )
                @csrf
                <div class="mb-3">
                    <label for="FormControlzone" class="form-label">Zone</label>
                    <input type="text" class="form-control @error("zone") is-invalid @enderror" id="FormControlzone" name="zone"
                           value="{{ $terrain->zone ? $terrain->zone : old("zone") }}" >
                    @error("zone")
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="FormControlsuperficie" class="form-label">superficie</label>
                    <input type="text" class="form-control @error("superficie") is-invalid @enderror" id="FormControlsuperficie" name="superficie"
                           value="{{ $terrain->superficie ? $terrain->superficie : old("superficie") }}" >
                    @error("superficie")
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mb-3">
                    {{ $terrain->exists ? "Modifier" : "Ajouter" }}
                </button>
            </form>
        </div>
    </div>

@endsection
