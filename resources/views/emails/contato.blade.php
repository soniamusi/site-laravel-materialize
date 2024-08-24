<x-mail::message>
    # Há uma nova mensagem da Pagina de contato
    # Mensagem de {{ $data['name'] }}

    <x-mail::panel>
        Lembre-se de responder o cliente o mais breve possivel.<br>
        Att, À direção.
    </x-mail::panel>

    E-mail: {{ $data['email'] }} <br>
    Mensagem: <br>
    {{ $data['message'] }}


    <x-mail::button :url="'https://smconsultoriaemti.com.br'">
        Acessar site
    </x-mail::button>

    {{ date('d/m/Y') }}<br>
    {{ config('app.name') }}
</x-mail::message>
