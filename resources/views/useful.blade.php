<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <article class="cards">
        @foreach ($record as $record)
            <div class="{{$record->status == "полезное" ? 'card' : 'card-useful'}}">
                <h2>{{ $record->name }}</h2>
                <p>{{ $record->message }}</p>
                <p>{{ $record->type }}</p>
                <p>{{ $record->status }}</p>
                <p>{{ $record->created_at }}</p>
                <p>время</p>
            </div>
        @endforeach
    </article>
</body>
</html>
