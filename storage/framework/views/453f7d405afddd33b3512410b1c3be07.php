
<?php $__env->startSection('content'); ?>
<br>
<div class="card text-center container" style="width: 35rem">
  <div class="card-header">
    Oferecimento: 3GF
  </div>
  <div class="card-body">
    <h5 class="card-title">Bem-vindo!</h5>
    <p class="card-text">Seja bem-vindo ao e-commerce do grupo 3GF!
        Aqui você poderá encontrar diversos produtos cadastrados e testar as funções de CRUD presentes em nosso website.
    </p>
    <a href="<?php echo e(route ('produto.listar')); ?>" class="btn btn-primary">Lista de Produtos</a>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/site/index.blade.php ENDPATH**/ ?>