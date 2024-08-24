@extends('site.layout')
@section('title', 'Pagina Serviços')
@section('content')

    <div class="row container center-align">
        <div class="col s12">
            <h1 class="flow-text blue-text">Página Serviços</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, maxime!</p>
        </div>
    </div>
    <p>&nbsp;</p>
    <div class="row container">
        <div class="col s12 l6">

            <div class="row">
                <div class="col s12 l6 grey lighten-4 center-align hoverable">
                    <i class="fa-solid fa-truck blue-text text-lighten-2 medium"></i>
                    <p>Lorem ipsum dolor sit.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="col s12 l6 hoverable">
                    <i class="fa-solid fa-hand-holding-heart blue-text text-lighten-2 medium"></i>
                    <p>Lorem ipsum dolor sit.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="col s12 l6 hoverable">
                    <i class="fa-solid fa-code blue-text text-lighten-2 medium"></i>
                    <p>Lorem ipsum dolor sit.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="col s12 l6 grey lighten-4 hoverable">
                    <i class="fa-solid fa-radio blue-text text-lighten-2 medium"></i>
                    <p>Lorem ipsum dolor sit.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>

        </div>
        <div class="col s12 l6">
            <img src="{{ asset('imagens/img-team.jpg') }}" alt="[imagem]" title="Team"
                class="responsive-img materialboxed">
        </div>
    </div>
    <p>&nbsp;</p>
    <div class="row container">
        <div class="col s12 center-align">
            <h1 class="flow-text blue-text">Planos</h1>
        </div>
        <p>&nbsp;</p>
        {{-- card-01 --}}
        <div class="col s12 l4 hoverable">
            <div class="card center-align">
                <div class="card-image">
                    <i class="fa-solid fa-sack-dollar medium grey-text"></i>
                </div>
                <div class="card-content">
                    <span class="card-title">Basic R$89,90</span>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus, dolorum!</p>
                </div>
                <div class="card-action">
                    <a href="#" class="btn btn-small">Saiba mais...</a>
                </div>
            </div>
        </div>
        {{-- card-02 --}}
        <div class="col s12 l4 hoverable">
            <div class="card center-align">
                <div class="card-image">
                    <i class="fa-solid fa-piggy-bank medium grey-text"></i>
                </div>
                <div class="card-content">
                    <span class="card-title">Medium R$149,90</span>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus, dolorum!</p>
                </div>
                <div class="card-action">
                    <a href="#" class="btn btn-small">Saiba mais...</a>
                </div>
            </div>
        </div>
        {{-- card-03 --}}
        <div class="col s12 l4 hoverable">
            <div class="card center-align">
                <div class="card-image">
                    <i class="fa-solid fa-hand-holding-dollar medium green-text text-lighten-2"></i>
                </div>
                <div class="card-content">
                    <span class="card-title">Gold R$199,90</span>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus, dolorum!</p>
                </div>
                <div class="card-action">
                    <a href="#" class="btn btn-small">Saiba mais...</a>
                </div>
            </div>
        </div>

    </div>

@endsection
