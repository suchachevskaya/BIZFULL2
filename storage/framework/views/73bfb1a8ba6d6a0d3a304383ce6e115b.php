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
<script src="/js/jquery.min.js"></script>
<script src="/js/owl.carousel.js"></script>
<script>
    $(document).ready(function () {
        console.log("carousel initialized");
        $(".owl-carousel").owlCarousel({
            center: true,
            items: 1, // отображаем только одно изображение за раз
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplaySpeed: 1000, // время анимации в миллисекундах
            nav: false, // отключаем навигацию
            responsive: {
                600: {
                    items: 1
                }
            }
        });
    });
</script>
</html>
<?php /**PATH C:\OSPanel\BIZFULL2\resources\views/project-page.blade.php ENDPATH**/ ?>