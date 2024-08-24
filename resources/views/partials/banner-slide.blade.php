<div class="slider">
    <div class="slides">
        <li>
            <img src="{{ asset('imagens/banner-slide-1.jpg') }}" alt="{imagem}" title="Imagem 1">
            <div class="caption left-align">
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae consequatur ipsum sequi est error nam
                    eveniet, perspiciatis temporibus, corporis quos eligendi</h5>

                <a href="#modal-lead" class="btn btn-small blue modal-trigger">Quero me cadastrar</a>
            </div>
        </li>

        <li>
            <img src="{{ asset('imagens/banner-slide-2.jpg') }}" alt="{imagem}" title="Imagem 2">
            <div class="caption right-align">
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit....</h5>

                <a href="#modal-lead" class="btn btn-small blue modal-trigger">Quero me cadastrar</a>
            </div>
        </li>
    </div>
</div>

{{-- Abrir modal --}}
<div class="modal" id="modal-lead">
    <div class="modal-content">
        <h3 class="flow-text">Preencha todos os campos</h3>

        <form action="{{ route('lead') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col s12 m6 input-field">
                    <i class="material-icons prefix">person</i>
                    <input type="text" name="name" id="name" required>
                    <label for="name">Digite seu nome</label>
                </div>
                <div class="col s12 m6 input-field">
                    <i class="material-icons prefix">phone_iphone</i>
                    <input type="tel" name="tel" id="tel" required>
                    <label for="tel">Digite seu Telefone</label>
                </div>
                <div class="col s12 m6 input-field">
                    <i class="material-icons prefix">email</i>
                    <input type="email" name="email" id="email" required>
                    <label for="email">Digite seu E-Mail</label>
                </div>
                <div class="col s12 input-field">
                    <input type="submit" value="enviar" class="btn btn-small blue">
                    <input type="reset" value="limpar" class="btn btn-small red">
                </div>
            </div>
        </form>

    </div>
</div>
