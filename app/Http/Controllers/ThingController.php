<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thing;

class ThingController extends Controller
{
    public function index()
    {
        return Thing::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        return Thing::create($request->all());
    }
}
