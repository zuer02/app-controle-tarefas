<x-mail::message>
# {{$tarefa->tarefa}}

Data Limite de conclusão: {{ date('d/m/Y', strtotime($tarefa->data_limite_conclusao)) }}

<x-mail::button :url=$url>
Clique aqui para ver a tarefa
</x-mail::button>

Att,<br>
{{ config('app.name') }}
</x-mail::message>
