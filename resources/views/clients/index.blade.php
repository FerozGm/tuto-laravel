@extends('layouts.app')

@section('content')

<h1>clients</h1>
@can('create', 'App\Client')
<a href="{{ route('clients.create') }}" class="btn btn-primary my-3">Nouveau client</a>
@endcan

<!--@foreach($clients as $client)
<li>{{ $client->name }} <em class="muted"> ({{ $client->email }}</em> <em class="muted"> - {{ $client->entreprise->name }}) </em></li>
@endforeach-->

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Status</th>
            <th scope="col">Entreprise</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clients as $client)
        <tr>
            <th scope="row"> {{ $client->id }} </th>
            <td><a href="clients/{{ $client->id }}">{{ $client->name }}</a></td>
            <td>{{ $client->status }}</td>
            <td>{{ $client->entreprise->name }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="row d-flex justify-content-center">
    {{ $clients->links() }}
</div>

@endsection
