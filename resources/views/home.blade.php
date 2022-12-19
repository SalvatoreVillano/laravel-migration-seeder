<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>



    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Azienda</th>
                <th scope="col">Stazione Partenza</th>
                <th scope="col">Stazione Arrivo</th>
                <th scope="col">Orario Partenza</th>
                <th scope="col">Orario Arrivo</th>
                <th scope="col">Codice Treno</th>
                <th scope="col">Numero Carrozze</th>
                <th scope="col">Treno In Orario</th>
                <th scope="col">Treno Cancellato</th>

            </tr>
        </thead>
        <tbody>
            @forelse ($trains as $key=>$train)
                <tr>
                    <th scope="row">{{ $key }}</th>
                    <td>{{ $train->azienda }}</td>
                    <td>{{ $train->stazione_partenza }}</td>
                    <td>{{ $train->stazione_arrivo }}</td>
                    <td>{{ $train->orario_partenza }}</td>
                    <td>{{ $train->orario_arrivo }}</td>
                    <td>{{ $train->codice_treno }}</td>
                    <td>{{ $train->num_carrozze }}</td>
                    <td>{{ $train->in_orario }}</td>
                    <td>{{ $train->cancellato }}</td>

                </tr>
            @empty
                <p>No Trains</p>
            @endforelse
        </tbody>
    </table>






</body>

</html>
