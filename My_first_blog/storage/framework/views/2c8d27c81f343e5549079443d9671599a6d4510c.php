<?php $__env->startSection('title', '| Edit post'); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
  <div class="col-md-8" style="margin-top:10px">
    <?php echo Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']); ?>


    <?php echo e(Form::label('title', 'Title:')); ?>

    <?php echo e(Form::text('title', null, ["class" => 'form-control'])); ?>


    <?php echo e(Form::label('body', 'Text:')); ?>

    <?php echo e(Form::textarea('body', null, ["class" => 'form-control'])); ?>


  
  </div>
  <div class="col-md-4">

    <div class="well" style="margin-top:40px">
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
          <?php echo e(Form::submit('Save Changes', ['class' => 'btn btn-success btn-block'])); ?>



        </div>
        <div class="col-sm-6">
          <?php echo Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')); ?>

        </div>
      </div>
    </div>
  </div>
  <?php echo Form::close(); ?>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>