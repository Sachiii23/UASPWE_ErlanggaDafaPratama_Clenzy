<?php $__env->startSection('content'); ?>
    <div class="content-body">
        <div class="container-fluid mt-3">
            <div class="row">
            <?php $jumlahTransaksi = 0;
            ?>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($v->pelanggan->nama == $userAktif): ?>
                    <?php $jumlahTransaksi++
                    ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-6 col-sm-6">
                    <div class="card gradient-2">
                        <div class="card-body">
                            <h3 class="card-title text-white">Transaksi</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white"><?php echo e($jumlahTransaksi); ?></h2>
                                
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="card gradient-1">
                        <div class="card-body">
                            <h3 class="card-title text-white">Jenis Laundry</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white"><?php echo e($dataPr); ?></h2>
                                
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                        </div>
                    </div>
                </div>
                <!-- #/ container -->
            </div>


            
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('karyawan.layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\applaundry\resources\views/karyawan/dashboard/index.blade.php ENDPATH**/ ?>