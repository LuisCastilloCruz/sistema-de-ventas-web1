<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Category;
use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::orderBy('id','DESC')->paginate(15);
        return view('admin.tags.index', compact('tags'));
    }
    public function create()
    {
        $categories = Category::orderBy('name', 'ASC' )->pluck('name','id');
        return view('admin.tags.create', compact('categories'));
    }
    public function store(Request $request)
    {

        $request->validate([
            'name'=>'required|unique:tags|max:20',
        ]);
        if($request->hasFile('image')){
            $image=$request->file('image');
            $nombre = time().$image->getClientOriginalName();
            $ruta = public_path().'/images';
        }
        $tag = new Tag;
        $tag->name = e($request->name);
        $tag->category_id = e($request->category_id);
        $tag->slug = Str::slug($request->name);
        $tag->save();
        return redirect()->route('tags.index')->with('info','Agregado correctamente');
    }
    public function module($module)
    {
        $tags = Tag::where('module',$module)->orderBy('id','DESC')->paginate(15);
        return view('admin.tags.index', compact('tags'));
    }
    public function show(Tag $tag)
    {
        //
    }
    public function edit($id)
    {
        $tag = Tag::where('id',$id)->firstOrFail();
        $categories = Category::orderBy('name', 'ASC' )->pluck('name','id');
        return view('admin.tags.edit', compact('tag', 'categories'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required|max:20',
        ]);
        $tag = Tag::findOrFail($id);
        $tag->name = e($request->name);
        $tag->category_id = e($request->category_id);
        $tag->slug = Str::slug($request->name);
        $tag->save();
        return redirect()->route('tags.index')->with('info','Actualizado correctamente');
    }
    public function destroy($id)
    {
        $tag = Tag::findOrFail($id)->delete();
        return back()->with('info','Borrado con éxito');
    }
}