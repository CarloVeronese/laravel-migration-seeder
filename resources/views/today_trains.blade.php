<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Today Trains</title>
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container">
        <div class="row">
            @forelse ($todayTrains as $train)
                <div class="col-2">
                    <ul>
                        <li>{{$train->departure_station}}</li>
                        <li>{{$train->departure_time}}</li>
                        <li>{{$train->arrival_station}}</li>
                        <li>{{$train->arrival_time}}</li>
                        <li>{{$train->company}}</li>
                    </ul>
                </div>                
            @empty
                
            @endforelse
        </div>
    </div>
</body>
</html>