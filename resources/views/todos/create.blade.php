<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <title>Create Todo</title>
</head>
<body>
    <div class="text-center pt-10">
        <h1 class="text-2xl">Create Todo</h1>
        @if(Session::has('message'))
            <p class="alert info">{{ Session::get('message') }}</p>
        @endif
        <form action="/todos/create" method="post" class="py-5">
            @csrf
            <input type="text" name="title" class="py-2 px-2 border">
            <input type="submit" value="Create" class="py-2 px-2 border rounded">
        </form>
    </div>
</body>
</html>
