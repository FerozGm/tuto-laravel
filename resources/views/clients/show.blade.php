@extends('layouts.app')

@section('content')
    <h1 class="my-3">{{ $client->name }}</h1>
    <a href="/clients/{{ $client->id }}/edit" class="btn btn-secondary my-3">Editer</a>
    <form action="/clients/{{ $client->id }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">supprimer</button>
    </form>
    <hr>
    <p><strong>Email :</strong> {{ $client->email }}</p>
    <p><strong>Entreprise :</strong> {{ $client->entreprise->name }}</p>
    @if ($client->image)
        <img src="{{ asset('storage/' . $client->image) }}" alt="client-avatar" class="img-thumbnail">
    @endif
@endsection
