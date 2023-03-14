</head>
<body>
<header>
    <div class="container-hero">
        <div class="container hero">
            <div class="customer-support">
                <div class="content-customer-support">
                </div>
            </div>
            <div class="container-logo">
                <i class="fa-solid fa-mug-hot"></i>
                <h1 class="logo"><a href="{{route('inicio')}}">Coffe Place</a></h1>
            </div>
            <div class="container-user">
                <a href="{{route('login')}}"><i class="fa-solid fa-user"></i></a>
                <a href="{{route('pagos')}}"><i class="fa-solid fa-basket-shopping"></i></a>
                <div class="content-shopping-cart">
                    <span class="text">Carrito</span>
                    <span class="number">(0)</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container-navbar">
        <nav class="navbar container" style="justify-content: center">
            <i class="fa-solid fa-bars"></i>
            <ul class="menu">
                <li><a href="{{route('inicio')}}">Inicio</a></li>
                <li><a href="{{ route('sucursales') }}">Sucursales</a></li>
                <li><a href="{{ asset('catalogo') }}">Catálogo</a></li>
            </ul>
        </nav>
    </div>
</header>
