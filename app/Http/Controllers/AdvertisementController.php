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

    public function create()
    {
        $advertisement = new Advertisement();
        return view('advertisements.create', compact('advertisement'));
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'title' => 'required|unique:advertisements',
            'description' => 'required|min:1000',
        ]);

        $article = new Advertisement();
        $article->fill($data);
        $article->save();

        return redirect()
            ->route('advertisements.index');
    }
}
