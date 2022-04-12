<?php /** @var string $taskClass */ ?>
<?php echo $__env->make('tasks.batch-info', [
    'instructionsView' => $taskClass::instructionView(),
    'commandLine' => 'wp mediacloud:storage syncLocal [--limit=<number>] [--offset=<number>] [--page=<number>]',
    'commandTitle' => 'Sync Local Files',
    'commandLink'=> null,
    'warning' => $warning,
    'taskClass' => $taskClass
], \MediaCloud\Vendor\Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/wp-content/plugins/ilab-media-tools/views/tasks/batch/sync-local-files.blade.php ENDPATH**/ ?>