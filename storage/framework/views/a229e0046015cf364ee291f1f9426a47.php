<!--[if BLOCK]><![endif]--><?php if($paginator->hasPages()): ?>
    <nav>
        <ul class="pagination">

            <!--[if BLOCK]><![endif]--><?php if($paginator->onFirstPage()): ?>
                <div class="disabled" aria-disabled="true" aria-label="<?php echo app('translator')->get('pagination.previous'); ?>">
                    <span aria-hidden="true">&lsaquo;</span>
                </div>
            <?php else: ?>
                <div>
                    <a href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev" aria-label="<?php echo app('translator')->get('pagination.previous'); ?>">&lsaquo;</a>
                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->


            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <!--[if BLOCK]><![endif]--><?php if(is_string($element)): ?>
                    <div class="disabled" aria-disabled="true"><span><?php echo e($element); ?></span></div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->


                <!--[if BLOCK]><![endif]--><?php if(is_array($element)): ?>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!--[if BLOCK]><![endif]--><?php if($page == $paginator->currentPage()): ?>
                            <div class="active" aria-current="page"><span><?php echo e($page); ?></span></div>
                        <?php else: ?>
                            <div><a href="<?php echo e($url); ?>"><?php echo e($page); ?></a></div>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->


            <!--[if BLOCK]><![endif]--><?php if($paginator->hasMorePages()): ?>
                <div>
                    <a href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next" aria-label="<?php echo app('translator')->get('pagination.next'); ?>">&rsaquo;</a>
                </div>
            <?php else: ?>
                <div class="disabled" aria-disabled="true" aria-label="<?php echo app('translator')->get('pagination.next'); ?>">
                    <span aria-hidden="true">&rsaquo;</span>
                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </ul>
    </nav>
<?php endif; ?><!--[if ENDBLOCK]><![endif]-->
<?php /**PATH C:\OSPanel\BIZFULL2\vendor\laravel\framework\src\Illuminate\Pagination/resources/views/default.blade.php ENDPATH**/ ?>
