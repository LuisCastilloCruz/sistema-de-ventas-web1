<?php

namespace App\Http\Controllers;

use App\Http\Requests\SocialMedia\StoreRequest;
use App\Http\Requests\SocialMedia\UpdateRequest;
use App\SocialMedia;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
    }
    public function index()
    {
        $social_medias = SocialMedia::get();
        return view('admin.social_medias.index', compact('social_medias'));
    }
    public function create()
    {
        $social_medias = SocialMedia::get();

        return view('admin.social_medias.create', compact('social_medias'));
    }
    public function store(StoreRequest $request, SocialMedia $social_medias)
    {
        $social_medias->my_store($request);
        return redirect()->route('social_medias.index')->with('toast_success', '¡Red socia creada con éxito!');
    }
    public function show(SocialMedia $social_media)
    {
        return view('admin.social_medias.show', compact('social_media'));
    }
    public function edit(SocialMedia $social_media)
    {
        return view('admin.social_medias.edit', compact('social_media'));
    }
    public function update(UpdateRequest $request, SocialMedia $social_media)
    {
        $social_media->my_update($request);
        return redirect()->route('social_medias.index')->with('toast_success', '¡Red socia actualizada con éxito!');
    }


    public function destroy($id)
    {
        $social_media = SocialMedia::findOrFail($id)->delete();
        return back()->with('info', '¡Red social eliminada con éxito!');

    }
}
