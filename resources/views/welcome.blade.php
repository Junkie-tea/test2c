<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Книга жалоб</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <article>
        <h1>Книга жалоб</h1>
        <form action="{{ route('create') }}" method="POST">
            @csrf
            <label for="name">Название</label>
            <input type="text" name="name" id="name" required>
            <label for="message">Текст жалобы</label>
            <textarea name="message" id="message" cols="30" rows="10" required></textarea>
            <label for="name">Тип</label>
            <input type="text" name="type" id="type" required>
            <button type="submit">Отправить</button>
        </form>
    </article>
    <article class="cards">
        @foreach ($record as $record)
            <div class="{{$record->status == "полезное" ? 'card' : 'card-useful'}}">
                <h2>{{ $record->name }}</h2>
                <p>{{ $record->message }}</p>
                <p>{{ $record->type }}</p>
                <p>{{ $record->status }}</p>
                <p>{{ $record->created_at }}</p>
                <form action="{{ route('store', $record->id) }}" method="POST">
                    @csrf
                    <button type="submit">Полезный</button>
                </form>
            </div>
        @endforeach
    </article>
</body>
</html>
