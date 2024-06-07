<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Dashboard</li>
            <li>
                <a href="/dashboard" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-label">Apps</li>
            <li>
                <a href="{{ route('index.user') }}" aria-expanded="false">
                    <i class="icon-user menu-icon"></i> <span class="nav-text">User</span>
                </a>
            </li>
            <li>
                <a href="{{ route('index.produk') }}" aria-expanded="false">
                    <i class="icon-envelope menu-icon"></i> <span class="nav-text">Produk</span>
                </a>
            </li>
            <li>
                <a href="{{ route('index.customer') }}" aria-expanded="false">
                    <i class="icon-badge menu-icon"></i><span class="nav-text">Costumer</span>
                </a>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Transaksi</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('create.transaksi') }}">Transaksi</a></li>
                    <li><a href="{{ route('index.transaksi') }}">List Transaksi</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
