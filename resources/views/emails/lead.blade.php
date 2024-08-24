<x-mail::message>
    # Você recebeu um novo email!

    <p>
        Nome: {{ $data['name'] }} <br>
        Telefone: {{ $data['tel'] }}<br>
        Email: {{ $data['email'] }}
    </p>

    <x-mail::button :url="'https://smconsultoriaemti.com.br'">
        Acesse o site clique aqui.
    </x-mail::button>

    {{ date('d/m/Y') }}<br>
    {{ config('app.name') }}
</x-mail::message>
