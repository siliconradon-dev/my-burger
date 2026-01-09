<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class OrderController extends Controller
{
    public function index()
    {
        return Inertia::render('Admin/Order/Index');
    }

    public function view($id)
    {
        return Inertia::render('Admin/Order/View', ['id' => $id]);
    }

    public function updateStatus(Request $request, $id)
    {
        // TODO: Implement status update logic
        return back();
    }
}
