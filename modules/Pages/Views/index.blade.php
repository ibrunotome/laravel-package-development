<h1>Páginas</h1>

<ul>
    @foreach($pages as $page)
        <li>{{ $page->title }}</li>
    @endforeach
</ul>