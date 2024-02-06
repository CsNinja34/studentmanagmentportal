
<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-header">Batches</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Enrollment No : <?php echo e($item->enrollments->enroll_no); ?></h5>
        <p class="card-text">Paid Date : <?php echo e($item->paid_date); ?></p>
        <p class="card-text">Amount : <?php echo e($item->amount); ?></p>

  </div>
      
    </hr>
  
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\studentmangement\studentmanagement-app\resources\views/payments/show.blade.php ENDPATH**/ ?>