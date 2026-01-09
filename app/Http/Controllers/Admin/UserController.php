<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index()
    {
        $users = \App\Models\User::latest()->paginate(10);
        return Inertia::render('Admin/User/Index', [
            'users' => $users
        ]);
    }

    public function changeStatus($id)
    {
        // TODO: Implement status change logic
        return back();
    }
}
