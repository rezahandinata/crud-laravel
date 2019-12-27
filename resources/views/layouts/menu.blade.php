<!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h1>
                    <a href="index.html">Modernize</a>
                </h1>
                
            </div>
            <div class="profile-bg"></div>
            <ul class="list-unstyled components">
                <li>
                    <a href="{{url('/home')}}">
                        <i class="fas fa-home"></i>
                        Dashboard
                    </a>
                </li>
                 <li>
                    <a href="{{url('/category')}}">
                        <i class="fas fa-book"></i>
                        Category
                    </a>
                </li>
                
                <li>
                    <a href="{{url('/products')}}">
                        <i class="fab fa-dropbox"></i>
                        Products
                    </a>
                </li>
                <li>
                    <a href="{{url('/penjualan')}}">
                        <i class="fas fa-shopping-cart"></i>
                        Penjualan
                    </a>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-users"></i>
                        User
                    </a>
                </li>
                <li>
                    <a href="{{url('/logout')}}">
                        <i class="fas fa-sign-out-alt"></i>
                        Logout
                    </a>
                </li>
            </ul>
        </nav>