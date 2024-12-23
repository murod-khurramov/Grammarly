<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        if ($search) {
            // Agar qidiruv so'rovi mavjud bo'lsa
            $users = User::where('name', 'LIKE', '%' . $search . '%')->paginate(10);
        } else {
            // Agar qidiruv bo'sh bo'lsa hech narsa qaytarmaslik
            $users = collect(); // Bo'sh kolleksiya
        }

        return view('users.index', compact('users', 'search'));
    }

    public function show(User $user): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        return view('users.show', compact('user'));
    }
}
