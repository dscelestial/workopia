<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jobs</title>
</head>

<body>
    <h1>Available Jobs</h1>
    @foreach ($jobs as $job)
        <li>{{ $job }}</li>
    @endforeach

    <form action="/jobs" method="POST">
        @csrf
        <input type="text" name="title" placeholder="title">
        <input type="text" name="description" placeholder="description">
        <button class="submit">SUBMIT</button>
    </form>
</body>

</html>
