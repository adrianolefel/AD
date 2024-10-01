<!DOCTYPE html>
<html lang="en">
<head>
    <title>Email</title>
</head>
<body>
    <h3>{{ $mailData['title']}}</h3>
    <p>
        {{$mailData['body']}}
    </p>
    <h6>{{$mailData['footer']}}</h6>
</body>
</html>