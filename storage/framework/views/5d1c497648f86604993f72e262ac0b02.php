<!DOCTYPE html>
<link href="/css/main.css" rel="stylesheet">
<link href="/css/footer.css" rel="stylesheet">
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>
<body class="antialiased">

<?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('main');

$__html = app('livewire')->mount($__name, $__params, 'lw-2544304824-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
</body>
</html>
<?php /**PATH C:\OSPanel\BIZFULL2\resources\views/welcome.blade.php ENDPATH**/ ?>