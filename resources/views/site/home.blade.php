@extends('site.layout')
@section('title', 'Pagina Home')
@section('content')

    <div class="row container">

        <div class="col s12 center-align">
            <p class="flow-text">Lorem ipsum dolor sit amet.</p>
        </div>

        <div class="col s12 divider"></div>
        <p>&nbsp;</p>

        {{-- CARD 1 --}}
        <div class="col s12 m6 l4">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('imagens/cards/card-1.jpg') }}" alt="[imagem]" title="card-1"
                        class="responsive-img materialboxed">
                </div>
                <div class="card-content">
                    <span class="card-title">Lorem, ipsum.</span>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis, minus.</p>
                </div>
                <div class="card-action">
                    <a href="">Saiba mais</a>
                </div>
            </div>
        </div>
        {{-- CARD 2 --}}
        <div class="col s12 m6 l4">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('imagens/cards/card-2.jpg') }}" alt="[imagem]" title="card-2"
                        class="responsive-img materialboxed">
                </div>
                <div class="card-content">
                    <span class="card-title">Lorem, ipsum.</span>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis, minus.</p>
                </div>
                <div class="card-action">
                    <a href="">Saiba mais</a>
                </div>
            </div>
        </div>
        {{-- CARD 3 --}}
        <div class="col s12 m6 l4">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('imagens/cards/card-1.jpg') }}" alt="[imagem]" title="card-1"
                        class="responsive-img materialboxed">
                </div>
                <div class="card-content">
                    <span class="card-title">Lorem, ipsum.</span>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis, minus.</p>
                </div>
                <div class="card-action">
                    <a href="">Saiba mais</a>
                </div>
            </div>
        </div>
    </div>

    <p>&nbsp;</p>
    <div class="row container">
        <div class="col s12">
            <div class="divider"></div>
        </div>
    </div>

    <p>&nbsp;</p>
    <div class="row container">
        <section class="col s12">
            <h1 class="flow-text light">Lorem, ipsum.</h1>
            <p class="flow-text light justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut consequuntur
                exercitationem
                suscipit, vero
                aperiam iste assumenda excepturi placeat qui dignissimos corporis repudiandae facere impedit. Aspernatur
                totam corrupti consequuntur voluptatem repellendus officia modi veniam, necessitatibus fuga, aperiam
                delectus dolorem quod omnis quibusdam accusantium, cumque illum quaerat cum laboriosam voluptatibus iste ex!
            </p>
            <p class="flow-text justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus totam magni
                inventore, modi, debitis
                autem placeat fugit nulla obcaecati enim expedita eligendi, sit cum! Blanditiis nesciunt voluptas voluptate,
                maxime ex eveniet numquam hic impedit? Ab, nemo nobis autem dolores praesentium dignissimos aliquid
                mollitia, suscipit nostrum corrupti accusantium quod est magnam.</p>

            <p>
                <a href="http://" target="_blank" class="waves-effect waves-light btn btn-small blue">Saiba Mais</a>
                <a href="http://" target="_blank" class="waves-effect waves-light btn btn-small purple">Cadastre-se</a>
            </p>
        </section>
    </div>
    <div class="parallax-container">
        <div class="parallax">
            <img src="{{ asset('imagens/parallax-01.jpg') }}" alt="[imagem]" title="Imagem Parallax" class="responsive-img">
        </div>
    </div>

    <p>&nbsp;</p>
    <div class="row container center-align">
        <div class="col s12 m6 l4">
            <img src="{{ asset('imagens/img-web.jpg') }}" alt="[imagem]" title="img-circulo1" class="responsive-img circle">
            <p class="flow-text">Web</p>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
            <p>
                <a href=""><i class="small fa-brands fa-php"></i></a>
                <i class="small fa-brands fa-html5"></i>
                <i class="small fa-brands fa-css3-alt"></i>
            </p>
        </div>
        <div class="col s12 m6 l4">
            <img src="{{ asset('imagens/img-seo.jpg') }}" alt="[imagem]" title="img-circulo1" class="responsive-img circle">
            <p class="flow-text">SEO</p>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
            <p>
                <a href=""><i class="small fa-brands fa-node"></i></a>
                <i class="small fa-brands fa-js"></i>
                <i class="small fa-brands fa-vuejs"></i>

            </p>
        </div>
        <div class="col s12 m6 l4">
            <img src="{{ asset('imagens/img-html.jpg') }}" alt="[imagem]" title="img-circulo1"
                class="responsive-img circle">
            <p class="flow-text">HTML</p>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
            <p>
                <a href=""><i class="small fa-brands fa-react"></i></i></a>
                <i class="small fa-brands fa-angular"></i>
                <i class="small fa-brands fa-laravel"></i>
            </p>
        </div>
    </div>

@endsection
