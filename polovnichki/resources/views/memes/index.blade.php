<!-- resources/views/cars/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Автосалон</title>
</head>
<body>
<h1>Автомобили в наличии</h1>

<a href="{{ route('cars.create') }}">Добавить новый автомобиль</a>

@if(session('success'))
<p style="color: green;">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="10" cellspacing="0">
<tr>
    <th>ID</th>
    <th>Марка</th>
    <th>Модель</th>
    <th>Год</th>
    <th>Цена</th>
    <th>Действия</th>
</tr>
@foreach($cars as $car)
<tr>
    <td>{{ $car->id }}</td>
    <td>{{ $car->make }}</td>
    <td>{{ $car->model }}</td>
    <td>{{ $car->year }}</td>
    <td>{{ number_format($car->price, 2) }} ₽</td>
    <td>
        <a href="{{ route('cars.show', $car) }}">Просмотр</a> |
        <a href="{{ route('cars.edit', $car) }}">Редактировать</a> |
        <form action="{{ route('cars.destroy', $car) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Удалить этот автомобиль?')">Удалить</button>
        </form>
    </td>
</tr>
@endforeach
</table>

</body>
</html>