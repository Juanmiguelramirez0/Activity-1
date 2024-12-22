
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dictionary & Achievements</title>
</head>
<body>
    <h1>Dictionary Words</h1>

    @foreach($dictionaries as $dictionary)
        <h2>{{ $dictionary->word }}</h2>

        <h3>Achievements</h3>
        <ul>
            @foreach($dictionary->achievements as $achievement)
                <li>{{ $achievement->award }}</li>
            @endforeach
        </ul>
    @endforeach
</body>
</html>
