<?php $__env->startSection('content'); ?>
    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Jenis Laundry</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">create</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Tambah Data</h4>
                            <div class="basic-form">
                                <form action="<?php echo e(route('store.produk')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Nama</label>
                                            <input type="text" name="nama" class="form-control" placeholder="Nama">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Harga</label>
                                            <input type="number" name="harga" class="form-control" placeholder="Harga">
                                        </div>
                                    </div>                               
                                    <button type="submit" class="btn btn-dark">Tambah</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\applaundry\resources\views/admin/produk/create.blade.php ENDPATH**/ ?>