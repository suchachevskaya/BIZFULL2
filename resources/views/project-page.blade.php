<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link href="/css/projectPage.css" rel="stylesheet">
<link href="/css/footer.css" rel="stylesheet">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>
<body class="antialiased">
@livewire('project-page', ['id' => $id])
</body>

</html>

