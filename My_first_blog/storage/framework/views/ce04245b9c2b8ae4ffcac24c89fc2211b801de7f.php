<?php $__env->startSection('title', '| Post-Show'); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-8">
    <h1><?php echo e($post->title); ?></h1>
    <p class="lead"><?php echo e($post->body); ?></p>
  </div>
  <div class="col-md-4">

    <div class="well">
      <dl class="dl-horizontal">
        <dt>Created:</dt>
        <dd><?php echo e($post->created_at->toDayDateTimeString()); ?></dd>
      </dl>
      <dl class="dl-horizontal">
        <dt>Last Updated:</dt>
        <dd><?php echo e($post->updated_at->toDayDateTimeString()); ?></dd>
      </dl>
      <hr>
      <div class="row">
        <div class="col-sm-6">
          <?php echo Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')); ?>


        </div>
        <div class="col-sm-6">
          <?php echo Form::open(['route' => ['posts.destroy', $post->id],'method' => 'delete']); ?>

          <?php echo e(Form::submit('Delete', ['class' => 'btn btn-danger btn-block'])); ?>

          <?php echo Form::close(); ?>

        </div>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>