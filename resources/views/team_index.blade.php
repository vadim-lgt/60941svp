@extends('layout')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-4 text-primary">Список команд</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="table-responsive shadow-sm bg-light p-3 rounded">
                    <table class="table align-middle text-center">
                        <thead class="bg-primary text-white">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Наименование</th>
                        </tr>
                        </thead>
                        <tbody class="table-light">
                        @forelse($team_index as $team)
                            <tr>
                                <td class="fw-bold align-middle">{{ $team->id }}</td>
                                <td class="align-middle">
                                    <a href="{{ route('team_show', $team->id) }}" class="text-decoration-none text-primary fw-semibold">
                                        {{ $team->name }}
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2" class="text-center text-secondary">Данных о командах пока нет</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
