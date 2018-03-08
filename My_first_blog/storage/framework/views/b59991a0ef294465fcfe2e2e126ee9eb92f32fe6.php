<?php $__env->startSection('title', '| Contact'); ?>


<?php $__env->startSection('stylesheets'); ?>

  <?php echo Html::style('css/parsley.css'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

  <div class="row">
    <div class="col-md-12">
      <h1>Contact Me</h1>
      <hr>
      <?php echo Form::open(array('data-parsley-validate' => '')); ?>


        <?php echo e(Form::label('email', 'Email:')); ?>

        <?php echo e(Form::text('email', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))); ?>


        <?php echo e(Form::label('subject', 'Subject:')); ?>

        <?php echo e(Form::text('subject', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))); ?>


        <?php echo e(Form::label('message', 'Message:')); ?>

        <?php echo e(Form::textarea('message', null, array('class' => 'form-control', 'required' => ''))); ?>

        <br>
        <?php echo e(Form::submit('Send Message', array('class' => 'btn btn-success btn-lg btn-block'))); ?>





      <?php echo Form::close(); ?>

    </div>
  </div>

  <?php $__env->stopSection(); ?>

  <?php $__env->startSection('scripts'); ?>

  <?php echo Html::script('js/parsley.min.js'); ?>


  <?php $__env->stopSection(); ?>

<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>