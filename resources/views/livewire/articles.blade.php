<div>

    <h1>Listado de articulos</h1>
    @foreach ( $articles as $article)
    <li> {{$article->title}} </li>
    @endforeach
</div>
