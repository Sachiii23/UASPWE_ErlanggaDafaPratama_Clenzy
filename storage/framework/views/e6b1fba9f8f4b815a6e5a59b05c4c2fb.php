<?php $__env->startSection('content'); ?>
    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Transaksi</a></li>
                </ol>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Transaksi</h4>                         

                            <div class="table-responsive">
                                <table class="table table-bordered verticle-middle">
                                    <thead>
                                        
                                        <tr>
                                            <th scope="col">No</th>                                           
                                            <th>Customer</th>
                                            <th>Jenis Laundry</th>
                                            <th>berat</th>
                                            <th>Harga/Kg</th>
                                            <th>Total</th>
                                            <th>Metode Pembayaran</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                                                                                      
                                        <?php if($v->pelanggan->nama == $pelangganLogin['name']): ?>
                                        
                                            <tr>
                                                <td><?php echo e($no++); ?></td>
                                                <td><?php echo e($v->pelanggan->nama); ?></td>
                                                <td><?php echo e($v->produk->nama); ?></td>
                                                <td><?php echo e($v->berat); ?> kg</td>
                                                <td>Rp. <?php echo e($v->produk->harga); ?></td>
                                                <td>Rp. <?php echo e($v->jumlah); ?></td>
                                                <td><?php echo e($v->metodePembayaran); ?></td>
                                                <td><span><a href="<?php echo e(route('edit.transaksi', $v->id)); ?>" class="btn btn-warning" data-toggle="tooltip" 
                                                            title="Edit"><i class="fa fa-pencil"></i>
                                                        </a>  
                                                        <form action="<?php echo e(route('destroy.transaksi', $v->id)); ?>" method="POST"
                                                            class="d-inline">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('delete'); ?>
                                                            <button class="btn btn-danger">
                                                                <i class="fa fa-close color-danger"></i>
                                                            </button>
                                                        </form></span>
                                                </td>
                                            </tr>         
                                                                           
                                          <?php endif; ?>
                                          
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
                                                                                    Content body end
                                                                                ***********************************-->


        <!--**********************************
                                                                                    Footer start
                                                                                ***********************************-->
        <!--**********************************
                                                                                    Footer end
                                                                                    ***********************************-->
        
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('karyawan.layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\applaundry\resources\views/karyawan/transaksi/index.blade.php ENDPATH**/ ?>