<nav class="teal">
    <div class="nav-wrapper container">

        {{-- Menu Hamburguer --}}
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <a href="{{ route('home') }}" class="brand-logo">Sônia Muniz</a>

        {{-- Menu para desktop --}}
        <ul class="right hide-on-med-and-down">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('servicos') }}">Portfólio</a></li>
            <li><a href="{{ route('galeria') }}">Galeria</a></li>
            <li><a href="{{ route('contato') }}">Contato</a></li>
        </ul>

        {{-- Menu Mobile --}}
        <ul id="slide-out" class="sidenav">
            <li>
                <div class="user-view">
                    <div class="background">
                        <img src="{{ asset('imagens/img-mobile.jpg') }}" alt="{imagem}" title="Site-Portfolio">
                    </div>
                    <a href="#user"><img class="circle"></a>
                    <a href="#name"><span class="white-text name">Sônia Muniz</span></a>
                    <a href="#email"><span class="white-text email">smuniz.silva07@gmail.com</span></a>
                </div>
            </li>
            <!-- <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>-->
            <!-- <li><a href="#!">Second Link</a></li>-->
            <li>
                <div class="divider"></div>
            </li>
            <li><a href="{{ route('home') }}"><i class="material-icons">home</i> Home</a></li>
            <li><a href="{{ route('servicos') }}"><i class="material-icons">business_center</i> Portfólio</a></li>
            <li><a href="{{ route('galeria') }}"><i class="material-icons">photo_library</i> Galeria</a></li>
            <li><a href="{{ route('contato') }}"><i class="material-icons">call</i> Contato</a></li>
        </ul>
    </div>
</nav>
