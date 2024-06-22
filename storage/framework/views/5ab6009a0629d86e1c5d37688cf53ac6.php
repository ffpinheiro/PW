

<?php $__env->startSection('content'); ?>
  <?php if(!empty($result) && $result->count()): ?>
  <div class="album py-5 bg-body-tertiary">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c"/>
                <text x="50%" y="50%" fill="#eceeef" dy=".3em"><?php echo e($item->nome); ?></text>
              </svg>
              <div class="card-body">
                <p class="card-text"><?php echo e($item->descricao); ?></p>
                <p class="card-text"><strong>R$ <?php echo e($item->preco); ?></strong></p>
                <div class="d-flex justify-content-between align-items-center">
                <?php if(auth()->guard()->check()): ?>
                <div class="btn-group">
                    <a href="<?php echo e(route('produto.alterar',['produto'=>$item->id])); ?>" class="btn btn-warning" role="button">Alterar</a>
                    <a href="<?php echo e(route('produto.delete',['produto'=>$item->id])); ?>" class="btn btn-danger" role="button">Deletar</a>
                  </div>
                <?php endif; ?>  

                  <small class="text-body-secondary"><?php echo e($item->tipo); ?></small>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </div>
  <div class="card container" style="width: 25rem;">
      <div class="card-body">
        <p class="card-text">Caso queira inserir um produto, clique no botão abaixo para inserir um novo!</p>
        <a href="<?php echo e(route('produto.create')); ?>" class="btn btn-primary">Inserir Produto</a>
      </div>
    </div>
  <?php else: ?>
  <br>
  <br>
    <div class="card container" style="width: 25rem;">
      <div class="card-body">
        <h5 class="card-title">Não encontrou nenhum produto?</h5>
        <p class="card-text">Caso não esteja vendo nada, clique no botão abaixo para inserir um novo produto em nosso banco de dados!</p>
        <a href="<?php echo e(route('produto.create')); ?>" class="btn btn-primary">Inserir Produto</a>
      </div>
    </div>
  <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/site/listar.blade.php ENDPATH**/ ?>