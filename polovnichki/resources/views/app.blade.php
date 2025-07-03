<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Автомагазин</title>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: 'Arial', sans-serif;
    background: linear-gradient(135deg, #1e3c72, #2a5298);
    color: #fff;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
  }

  header {
    background-color: rgba(0, 0, 0, 0.3);
    padding: 20px;
    text-align: center;
  }

  header h1 {
    font-size: 3em;
    margin-bottom: 10px;
  }

  header p {
    font-size: 1.2em;
  }

  /* Главный блок */
  .hero {
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 40px 20px;
  }

  .hero-content {
    max-width: 800px;
    text-align: center;
  }

  .hero-content h2 {
    font-size: 2.5em;
    margin-bottom: 20px;
  }

  .hero-content p {
    font-size: 1.2em;
    margin-bottom: 30px;
  }

  .btn {
    display: inline-block;
    padding: 15px 30px;
    background-color: #ff6f61;
    color: #fff;
    text-decoration: none;
    font-size: 1.2em;
    border-radius: 5px;
    transition: background-color 0.3s ease, transform 0.3s ease;
  }

  .btn:hover {
    background-color: #ff3b2e;
    transform: scale(1.05);
  }

 /* Раздел Каталог */
 #catalog {
   padding:50px; 
   background-color: rgba(255,255,255,0.05);
 }
 
 #catalog h2 {
   text-align:center; 
   font-size:3em; 
   margin-bottom:40px; 
   color:#fff; 
   text-shadow:#0004 2px 2px
 }
 
 .categories {
   display:flex; 
   flex-wrap:wrap; 
   justify-content:center; 
   gap:20px; 
 }
 
 .category-card {
   background-color:#fff; 
   color:#000; 
   width:max(250px, calc(25% -20px)); 
   border-radius:10px; 
   overflow:hidden; 
   box-shadow:#0004 0px4px8px; 
   transition:.3s all ease
 }
 
 .category-card img {
   width:auto; 
   max-width:none; 
   height:auto; 
   display:block; 
 }
</style>
</head>
<body>

<header>
<h1>Автомагазин</h1>
<p>Лучшие запчасти и услуги для вашего автомобиля</p>
</header>

<!-- Главный блок -->
<section class="hero">
<div class="hero-content">
<h2>Добро пожаловать в наш магазин!</h2>
<p>Здесь вы найдете все необходимое для ремонта и обслуживания вашего автомобиля.</p>
<!-- Удалена кнопка -->
<!-- <a href="#catalog" class="btn">Перейти к каталогу</a> -->
</div>
</section>

<!-- Раздел Каталог -->
<section id="catalog">
<h2>Каталог</h2>
<div class="categories">

<!-- Категория Детали -->
<div class="category-card">
<a href="/category/detali" style="text-decoration:none; color:black;">
<img src="" alt="Детали" />
<h3>Детали</h3>
<p>Различные автодетали и запчасти.</p>
</a>
</div>

<!-- Категория Машины -->
<div class="category-card">
<a href="/category/mashiny" style="text-decoration:none; color:black;">
<img src="https://images.unsplash.com/photo-1549924231-f129b911e442?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=60" alt="Машины" />
<h3>Машины</h3>
<p>Автомобили и автотранспорт.</p>
</a>
</div>

<!-- Категория Инструменты -->
<div class="category-card">
<a href="/category/instrumenty" style="text-decoration:none; color:black;">
<img src="https://images.unsplash.com/photo-1612831455549-7f7b9d6d4f4b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=60" alt="Инструменты" />
<h3>Инструменты</h3>
<p>Инструменты для ремонта и обслуживания.</p>
</a>
</div>

<!-- Категория Автокраска -->
<div class="category-card">
<a href="/category/avtokraska" style="text-decoration:none; color:black;">
<img src="" alt="Автокраска" />
<h3>Автокраска</h3>
<p>Материалы и оборудование для покраски авто.</p>
</a>
</div>

</div>
</section>

</body>
</html>