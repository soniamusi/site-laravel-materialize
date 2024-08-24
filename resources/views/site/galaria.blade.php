@extends('site.layout')
@section('title', 'Pagina Galeria')
@section('content')

    <div class="row container">
        <div class="col s12">
            <h1 class="flow-text blue-text">Página Galeria</h1>
        </div>
    </div>

    <div class="row container">
        @php
            $fotos = ['img-galeria-1.jpg', 'img-galeria-2.jpg', 'img-galeria-3.jpg', 'img-galeria-4.jpg', 'img-galeria-5.jpg', 'img-galeria-6.jpg', 'img-galeria-7.jpg', 'img-galeria-8.jpg'];
            $titulo = ['foto evento 1', 'foto evento 2', 'foto evento 3', 'foto evento 4', 'foto evento 5', 'foto evento 6', 'foto evento 7', 'foto evento 8'];
        @endphp

        @for ($galeria = 0; $galeria < count($fotos); $galeria++)
            <div class="col s12 m6 l3">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('imagens/galeria') }}/{{ $fotos[$galeria] }}" alt="[imagem]" title="Galeria"
                            class="responsive-img materialboxed">
                        <span class="card-title">{{ $titulo[$galeria] }}</span>
                    </div>
                </div>
            </div>
        @endfor
    </div>

    <div class="row container">
        <div class="col s12 m6">
            <h1 class="flow-text">Lorem ipsum dolor sit.</h1>
            <p class="paragrafo">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis dignissimos illum harum repudiandae ut
                reprehenderit sit odit sed ab incidunt.
            </p>
            <p class="paragrafo">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis dignissimos illum harum repudiandae ut
                reprehenderit sit odit sed ab incidunt.
            </p>
            <p class="paragrafor"><a href="#" class="btn btn-small indigo">Saiba mais..</a></p>
        </div>
        <div class="col s12 m6">
            <img src="{{ asset('imagens/galeria/img-galeria-1.jpg') }}" alt="[imagem]" title="Galeria-1"
                class="responsive-img">
        </div>

        <div class="col s12 m6">
            <img src="{{ asset('imagens/galeria/img-galeria-2.jpg') }}" alt="[imagem]" title="Galeria-1"
                class="responsive-img">
        </div>
        <div class="col s12 m6">
            <h1 class="flow-text">Lorem ipsum dolor sit.</h1>
            <p class="paragrafo">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis dignissimos illum harum repudiandae ut
                reprehenderit sit odit sed ab incidunt.
            </p>
            <p class="paragrafo">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis dignissimos illum harum repudiandae ut
                reprehenderit sit odit sed ab incidunt.
            </p>
            <p class="paragrafor"><a href="#" class="btn btn-small indigo">Saiba mais..</a></p>
        </div>

    </div>

@endsection
