<div class="comment-section">

    <form wire:submit.prevent="addComment" class="comment-form">
        <input type="text" wire:model="newComment" class="comment-input" placeholder="Express an opinion">
        <button type="submit" class="comment-button">Сomment</button>
    </form>

    <ul class="comments-list">
        <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="comment-item">
                <div>
                    <div class="user-name"><?php echo e($user->name); ?>

                        <!--[if BLOCK]><![endif]--><?php if(auth()->user()->hasRole('admin')): ?>
                            (ID: <?php echo e($user->id); ?>)
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    </div>
                    <div class="comment-date"><?php echo e($comment->created_at->setTimezone('Europe/Minsk')->format('d.m.Y H:i')); ?></div>

                    <div class="comment-body"><?php echo e($comment->body); ?></div>
                </div>
                <!--[if BLOCK]><![endif]--><?php if(auth()->user()->hasRole('admin')): ?>
                    <div class="deleteComment" wire:click="deleteComment(<?php echo e($comment->id); ?>)">Delete</div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p>There are no comments yet. Be the first</p>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    </ul>
</div>
<?php /**PATH C:\OSPanel\BIZFULL2\resources\views/livewire/comment.blade.php ENDPATH**/ ?>