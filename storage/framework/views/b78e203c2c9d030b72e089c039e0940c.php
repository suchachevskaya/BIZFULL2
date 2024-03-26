<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<link href="/css/NotificationPage.css" rel="stylesheet">
<link href="/css/footer.css" rel="stylesheet">

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
[$__name, $__params] = $__split('notification-page');

$__html = app('livewire')->mount($__name, $__params, 'lw-1057212771-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
</body>

</html>
<?php /**PATH C:\OSPanel\BIZFULL2\resources\views/notification-page.blade.php ENDPATH**/ ?>