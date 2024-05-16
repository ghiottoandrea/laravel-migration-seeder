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

    <div class="container">
        <h1 class="py-4">Trains plan:</h1>
        <div class="row row-cols-3 row-cols-lg-4 py-3 g-4">
            @forelse ($trains as $train)
            <div class="col my-5">
                <div class="card p-1">
                    <span class="card-title p-1">
                        Azienda: {{ $train->Company }}
                    </span>
                    <span class="card-text p-1">
                        Codice Treno: {{ $train->Train_code }}
                    </span>
                    <span class="card-text p-1">
                        Numero carrozze: {{ $train->Carriagers }}
                    </span>
                    <span class="card-text p-1">
                        Stazione Partenza: {{ $train->Departure_station }}
                    </span>
                    <span class="card-text p-1">
                        Stazione Arrivo: {{ $train->Arrival_station }}
                    </span>
                    <span class="card-text p-1">
                        Orario Partenza: {{ $train->Departure_time }}
                    </span>
                    <span class="card-text p-1">
                        Orario Arrivo: {{ $train->Arrival_tIme }}
                    </span>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            @empty
            <h1>No trains!</h1>
            @endforelse
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

</body>

</html>