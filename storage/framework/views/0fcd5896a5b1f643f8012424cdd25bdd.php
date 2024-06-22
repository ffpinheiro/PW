

<?php $__env->startSection('content'); ?>
  <?php if(auth()->guard()->check()): ?>
  <div class="container">
    <h2 class="mt-5">Criação de Produto</h2>
    <form action="<?php echo e(route('produto.store')); ?>" method="POST">
      
      <?php echo csrf_field(); ?>
      <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" class="form-control" id="name" name='nome' placeholder="Digite o nome do produto..." required >
      </div>
      <div class="form-group">
        <label for="tipo">Tipo do Produto:</label>
        <input type="text" class="form-control" id="tipo" name='tipo' placeholder="Digite o tipo do produto..." required>
      </div>
      <div class="form-group">
        <label for="tipo">Preço do Produto:</label>
        <input type="number" class="form-control" id="preco" name='preco' placeholder="Digite o preço do produto..." required>
      </div>
      <div class="form-group">
        <label for="descricao">Descrição do produto:</label>
        <textarea class="form-control" id="descricao" name='descricao' rows="4" placeholder="Digite a descrição do produto..." required></textarea>
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Inserir</button>
    </form>
  </div>
  <?php endif; ?>
  <?php if(auth()->guard()->guest()): ?>
  <br>
    <div class="card bg-warning mb-3 container" style="max-width: 18rem;">
      <div class="card-header">FALHA!</div>
      <div class="card-body">
        <h5 class="card-title">Você precisa estar logado</h5>
        <p class="card-text">Para visualizar esta página, você precisa estar autenticado no nosso sistema.</p>
      </div>
    </div>
  <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/site/inserir_produto.blade.php ENDPATH**/ ?>