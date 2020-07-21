<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Advertisement;

class AdvertisementController extends Controller
{
    public function index()
    {
        $advertisements = Advertisement::paginate();
        return view('advertisement.index', compact('advertisements'));
    }

    public function show($id)
    {
        $advertisement = Advertisement::findOrFail($id);
        return view('advertisement.show', compact('advertisement'));
    }
}
