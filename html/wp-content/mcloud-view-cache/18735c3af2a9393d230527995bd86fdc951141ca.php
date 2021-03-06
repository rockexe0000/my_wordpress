<?php /** @var \MediaCloud\Plugin\Tasks\TaskManager $manager */?>
<?php /** @var \MediaCloud\Plugin\Tasks\Task|null $task */?>
<?php /** @var string $taskClass */?>
<?php /** @var string $warning */?>


<?php $__env->startSection('header'); ?>
    <div class="header-actions">
        <a type="button" class="button button-primary" style="margin-right: 5px" href="<?php echo e(admin_url('admin.php?page=media-cloud-task-manager')); ?>">View Task Manager</a>
        <a type="button" class="button button-primary" href="<?php echo e(admin_url('admin.php?page=media-cloud-settings&tab=batch-processing')); ?>">Task Manager Settings</a>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
    <div id="task-batch" class="settings-body">
        <div class="task-info" style="display:none">
            <?php echo $__env->make("tasks.batch.".$taskClass::identifier(), ['taskClass' => $taskClass, 'warning' => $warning], \MediaCloud\Vendor\Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="buttons">
                <?php if($taskClass::requireConfirmation()): ?>
                <button type="button" data-confirmation="<?php echo e($taskClass::warnConfirmationText()); ?>" data-confirmation-answer="<?php echo e($taskClass::warnConfirmationAnswer()); ?>" class="button button-primary button-start-task">Start <?php echo e($taskClass::title()); ?></button>
                <?php else: ?>
                <button type="button" class="button button-primary button-start-task">Start <?php echo e($taskClass::title()); ?></button>
                <?php endif; ?>
            </div>
        </div>
        <div class="task-progress" style="display: none">
            <div class="progress-thumbnails">
                <div class="progress-thumbnails-container">
                </div>
                <div class="progress-thumbnails-fade"></div>
                <img class="progress-thumbnails-cloud" src="<?php echo e(ILAB_PUB_IMG_URL); ?>/icon-cloud.svg">
            </div>
            <div class="progress-container">
                <div class="progress-bar"></div>
            </div>
            <div class="progress-stats">
                <div class="group-break">
                    <div class="group">
                        <div class="callout">
                            <p class="value progress">48%</p>
                            <h4>Progress</h4>
                        </div>
                    </div>
                    <div class="group flexed">
                        <div class="callout">
                            <p class="value status status-running">Running</p>
                            <h4>Status</h4>
                        </div>
                    </div>
                    <div class="group">
                        <div class="callout">
                            <p class="value current">12</p>
                            <h4>Current</h4>
                        </div>
                        <div class="callout">
                            <p class="value remaining-items">4,309</p>
                            <h4>Remaining</h4>
                        </div>
                        <div class="callout">
                            <p class="value total-items">4,309</p>
                            <h4>Total</h4>
                        </div>
                    </div>
                </div>
                <div class="group-break">
                    <div class="group mobile-flexed">
                        <div class="callout">
                            <p class="value elapsed">4 minutes</p>
                            <h4>Elapsed Time</h4>
                        </div>
                        <div class="callout">
                            <p class="value remaining">4 minutes</p>
                            <h4>Remaining Time</h4>
                        </div>
                        <div class="callout">
                            <p class="value per-item">4 minutes</p>
                            <h4>Per Item</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="buttons" style="display:flex; align-items:center; justify-content: space-between">
                <a href="<?php echo e(admin_url('admin.php?page=media-cloud-task-manager')); ?>" class="button button-primary">View Task Manager</a>
                <button class="button button-whoa button-cancel-task" title="Cancel">Cancel <?php echo e($taskClass::title()); ?></button>
            </div>
        </div>
    </div>

    <script type="application/json" id="task-batch-running-task">
        <?php echo json_encode([
            'task' => $task,
            'identifier' => $taskClass::identifier(),
            'startNonce' => wp_create_nonce('mcloud_start_task'),
            'cancelNonce' => wp_create_nonce('mcloud_cancel_task'),
            'statusNonce' => wp_create_nonce('mcloud_task_status')
        ], JSON_PRETTY_PRINT); ?>

    </script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('../templates/sub-page', \MediaCloud\Vendor\Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/wp-content/plugins/ilab-media-tools/views/tasks/batch.blade.php ENDPATH**/ ?>