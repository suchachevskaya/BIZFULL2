<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link href="/css/createProject.css" rel="stylesheet">
<link href="/css/footer.css" rel="stylesheet">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>
<body class="antialiased">
@livewire('create-project')
<script src="/js/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        Livewire.on('stepChanged', function() {
            $('.marquee-text').each(function() {
                var text = $(this).text();
                var html = '<marquee class="marquee-style">' + text + '</marquee>';
                $(this).html(html);
            });
        });
    });
</script>
</body>
</html>

