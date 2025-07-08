<!-- resources/views/orders/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Оформление заказа</title>
</head>
<body>
<h1>Купить {{ $car->make }} {{ $car->model }}</h1>

<p>Цена: {{ number_format($car->price, 2) }} ₽</p>

<form action="{{ route('orders.store', ['order' => $car->id]) }}" method="POST">
@csrf

<label>Способ оплаты:</label><br>
<input type="radio" name="payment_method" value="card" required> Карта<br>
<input type="radio" name="payment_method" value="paypal"> PayPal<br>
<input type="radio" name="payment_method" value="cash"> Наличные<br><br>

<button type="submit">Оплатить</button>
</form>

</body>
</html>