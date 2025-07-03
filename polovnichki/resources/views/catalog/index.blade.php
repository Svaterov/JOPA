<h1>Каталог</h1>
<ul>
@foreach($categories as $category)
    <li>
        <a href="{{ route('catalog.show', $category['slug']) }}">{{ $category['name'] }}</a>
    </li>
@endforeach
</ul>