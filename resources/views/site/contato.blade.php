@extends('site.layout')
@section('title', 'Pagina Contato')
@section('content')

    <div class="row container">
        <div class="col s12">
            <h1 class="flow-text blue-text">Entre em Contato</h1>
        </div>
        <div class="col s12">
            <p>Dias de Funcionamento:<br>
                Seg a Sex - 08:00 às 17:00
            </p>
            <p>
                Telefone: (92) 992310540 <br>
                E-mail: sm.consultoriaemti@gmail.com
            </p>
            <p>
                Endereço: Av. Eduardo Ribeiro nº10 | Centro - Am
            </p>
        </div>
    </div>

    <div class="row container">
        <div class="col s12">

            <form action="{{ route('novocontato') }}" method="post">
                @csrf
                <div class="row">
                    {{-- campo Nome --}}
                    <div class="col s12 m6 input-field">
                        <i class="fa-solid fa-user prefix"></i>
                        <input type="text" name="name" id="name" required>
                        <label for="name">Seu Nome:</label>
                    </div>

                    {{-- campo Email --}}
                    <div class="col s12 m6 input-field">
                        <i class="fa-solid fa-envelope prefix"></i>
                        <input type="email" name="email" id="email" required>
                        <label for="email">Seu E-mail:</label>
                    </div>

                    {{-- campo Mensagem --}}
                    <div class="input-field col s12">
                        <textarea id="textarea1" name="message" class="materialize-textarea"></textarea>
                        <label for="textarea1">Sua Mensagem</label>
                    </div>

                    {{-- Botoes --}}
                    <div class="col s12 input-field">
                        <button type="submit" class="btn btn-small"><i
                                class="fa-solid fa-paper-plane left"></i>Enviar</button>
                        <button type="reset" class="btn btn-small blue"><i
                                class="fa-solid fa-eraser left"></i>Limpar</button>
                    </div>

                </div>
            </form>

        </div>
    </div>

    <div class="row">
        <div class="col s12">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.8551076379877!2d-60.02671762592239!3d-3.1329634404312157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x926c057deb42eccf%3A0xe400da281d96b2aa!2sAv.%20Eduardo%20Ribeiro%20-%20Centro%2C%20Manaus%20-%20AM%2C%20Brasil!5e0!3m2!1spt-BR!2spt!4v1698842681339!5m2!1spt-BR!2spt"
                width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
    </div>

@endsection
