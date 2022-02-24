<?php

namespace App\Http\Controllers;
use App\Models\MenuItem;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;

class HomeController extends Controller
{
    public function index()
    {
        return Inertia::render('Home', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
    
            'menuItems' => MenuItem::all()->map(function ($menu_item) {
                return [
                    'id' => $menu_item->id,
                    'name' => $menu_item->name,
                    'desc' => $menu_item->desc,
                    'category' => $menu_item->category,
                    'price' => $menu_item->price,
                    'image' => $menu_item->image,
                ];
            }),
        ]);
    }
}
