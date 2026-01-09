<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Category;

class SettingController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return Inertia::render('Admin/Setting/Index', [
            'categories' => $categories
        ]);
    }
}
