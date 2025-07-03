<h1>{{ $categoryData['name'] }}</h1>
<ul>
@foreach($categoryData['items'] as $item)
    <li>{{ $item['name'] }} - {{ $item['price'] }} руб.</li>
@endforeach
</ul>
<a href="{{ route('catalog.index') }}">Вернуться к каталогу</a>