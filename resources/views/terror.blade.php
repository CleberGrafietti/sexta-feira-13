<h1>Noites de terror do Playcenter</h1>

@foreach ($terror as $item)

id: {{$item->id}} - Personagem: {{$item->Personagem}} - Nome do Filme: {{$item->NomeFilme}} <br>
    
@endforeach