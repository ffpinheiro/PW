

<?php $__env->startSection('content'); ?> 
  <div class="container">
    <h2 class="mt-5">Alterar Produto</h2>
    
    <form action="<?php echo e(route('produto.update',['produto' => $item->id])); ?>" method="POST">
      
      <?php echo csrf_field(); ?>
      
      <?php echo method_field('PUT'); ?>
      <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" class="form-control" id="name" name='nome' placeholder="Nome do Produto..." value="<?php echo e($item->nome); ?>" readonly>
      </div>
      <div class="form-group">
      <label for="tipo">Tipo do Produto:</label>
      <input type="text" class="form-control" id="tipo" name='tipo' placeholder="Tipo do Produto..."  value="<?php echo e($item->tipo); ?>">
      </div>
      <div class="form-group">
        <label for="preco">Preço do Produto:</label>
        <input type="text" class="form-control" id="preco" name='preco' placeholder="Nome"  value="<?php echo e($item->preco); ?>">
      </div>
      <div class="form-group">
        <label for="descricao">Descrição do produto:</label>
        <textarea class="form-control" id="descricao" name='descricao' rows="4" placeholder="Digite a descrição do produto..." required></textarea>
    </div>  
      <hr>
      <button type="submit" class="btn btn-primary">Alterar</button>
    </form>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/site/alterar.blade.php ENDPATH**/ ?>