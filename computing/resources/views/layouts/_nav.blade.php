<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="profile-image">
                    <img src="{{asset('melody/images/faces/face16.jpg')}}" alt="image" />
                </div>
                <div class="profile-name">
                    <p class="name">
                        {{ Auth::user()->name }}
                    </p>
                    <p class="designation">
                        {{ Auth::user()->email }}
                    </p>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">
                <i class="fa fa-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        {{--  @can('reports.day' || 'reports.date' || 'report.results')  --}}
        <li class="nav-item">
           
            <a class="nav-link" data-toggle="collapse" href="#page-layouts1" aria-expanded="false"
                aria-controls="page-layouts">
                <i class="fas fa-chart-line menu-icon"></i>
                <span class="menu-title">Reportes</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-layouts1">
                <ul class="nav flex-column sub-menu">
                    
                </ul>
            </div>
        </li>
        {{--  @endcan  --}}
        {{--  @can('products.index' ||
            'categories.index' ||
            'tags.index' ||
            'brands.index'
            )  --}}
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#inventario" aria-expanded="false"
                aria-controls="inventario">
                <i class="fas fa-boxes menu-icon menu-icon"></i>
                <span class="menu-title">Inventario</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="inventario">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link" href="{{route('products.index')}}">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('categories.index')}}">Categorías</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('tags.index')}}">Etiquetas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('subcategories.index')}}">Subcategorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('brands.index')}}">Marcas</a>
                    </li>
                </ul>
            </div>
        </li>
        {{--  @endcan  --}}
       
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#blog" aria-expanded="false"
                aria-controls="blog">
                <i class="fas fa-book menu-icon menu-icon"></i>
                
                <span class="menu-title">Blog</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="blog">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link" href="{{route('posts.index')}}">Publicaciones</a>
                    </li> 
                </ul>
            </div>
        </li> 
       
        {{--  @can(
            'social_medias.index' ||
            'sliders.index' ||
            'subscriptions.index' ||
            'promotions.index'
            )  --}}
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#eCommerce" aria-expanded="false"
                    aria-controls="eCommerce">
                    <i class="fas fa-shopping-bag menu-icon menu-icon"></i>
                    <span class="menu-title">eCommerce</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="eCommerce">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item d-none d-lg-block">
                            <a class="nav-link" href="{{route('social_medias.index')}}">Redes sociales</a>
                        </li>
                        <li class="nav-item d-none d-lg-block">
                            <a class="nav-link" href="{{route('social_medias.index')}}">Sliders</a>
                        </li>
                        <li class="nav-item d-none d-lg-block">
                            <a class="nav-link" href="{{route('social_medias.index')}}">Suscripciones</a>
                        </li>
                        <li class="nav-item d-none d-lg-block">
                            <a class="nav-link" href="{{route('promotions.index')}}">Promociones</a>
                        </li>
                    </ul>
                </div>
            </li>
        {{--  @endcan  --}}
        <li class="nav-item">
            <a class="nav-link" href="{{route('providers.index')}}">
                <i class="fas fa-shipping-fast menu-icon"></i>
                <span class="menu-title">Proveedores</span>
            </a>
        </li>  
        {{--  @can(
            'business.index' ||
            'printers.index'
            )  --}}
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false"
                aria-controls="page-layouts">
                <i class="fas fa-cogs menu-icon"></i>
                <span class="menu-title">Configuración</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-layouts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link" href="{{route('business.index')}}">Empresa</a>
                    </li> 
                </ul>
            </div>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="{{route('users.index')}}">
                <i class="fas fa-user-tag menu-icon"></i>
                <span class="menu-title">Usuarios</span>
            </a>
        </li> 
        <li class="nav-item">
            <a class="nav-link" href="{{route('clients.index')}}">
                <i class="fas fa-users menu-icon"></i>
                <span class="menu-title">Clientes</span>
            </a>
        </li> 
    </ul>
</nav>
