<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Dashboard</li>
            <li>
                <a href="<?php echo e(route('karyawan.index.dashboard')); ?>" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>
            </li>     
            <li class="nav-label">Apps</li> 
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Transaksi</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="<?php echo e(route('create.transaksi')); ?>">Transaksi</a></li>
                    <li><a href="<?php echo e(route('index.transaksi')); ?>">List Transaksi</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo e(route('logout.login')); ?>" aria-expanded="false">
                    <i class="icon-logout menu-icon"></i><span class="nav-text">logout</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\applaundry\resources\views/karyawan/layouts/sidebar.blade.php ENDPATH**/ ?>