<div>
    <h1>Listado de articulos</h1>
    <h2> Categoría: {{ $cambiante }}</h2>
    <input
    wire:model="cambiante"
    type="text"
    
    >
    <ul>
    @foreach ( $articles as $article)
    <li> {{$article->title}} </li>
    @endforeach
    </ul>
</div>
