<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    // Метод для отображения основного каталога
    public function index()
    {
        // Получите список категорий (например, из базы данных)
        $categories = [
            ['name' => 'Категория 1', 'slug' => 'category-1'],
            ['name' => 'Категория 2', 'slug' => 'category-2'],
            // добавьте свои категории
        ];

        return view('catalog.index', compact('categories'));
    }

    // Метод для отображения подкаталога
    public function show($category)
    {
        // Получите данные о выбранной категории по slug или id
        // Например, из базы данных
        $categoryData = [
            'name' => ucfirst(str_replace('-', ' ', $category)),
            'items' => [
                ['name' => 'Товар 1', 'price' => 100],
                ['name' => 'Товар 2', 'price' => 200],
                // ваши товары
            ],
        ];

        return view('catalog.show', compact('categoryData'));
    }
}