<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<link href="/css/projectPage.css" rel="stylesheet">
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
[$__name, $__params] = $__split('project-page', ['id' => $id]);

$__html = app('livewire')->mount($__name, $__params, 'lw-3163799269-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
</body>

</html>

<?php /**PATH C:\OSPanel\BIZFULL2\resources\views/project-page.blade.php ENDPATH**/ ?>