<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{

    public function index()
    {
        return view('tag.index')->with('tags', Tag::all());;
    }


    public function create()
    {
        return view ('tag.create');
    }


    public function store(Request $request)
    {
        Tag::create ($request->all());
        session()->flash('success','A tag do Fantoy foi cadastrado com sucesso!');
        return redirect(route('tag.index'));
    }


    public function show(Tag $tag)
    {
        return view('tag.show')->with(['tag' => $tag, 'products' => $tag->products()->paginate(3)]);
    }

    public function edit(Tag $tag)
    {
        return view('tag.edit')->with('tag', $tag);
    }


    public function update(Request $request, Tag $tag)
    {
        $tag->update($request->all());
        session()->flash('success','A tag do Fantoy foi alterado com sucesso!');
        return redirect( route('tag.index') );
    }

 
    public function destroy(Tag $tag)
    {
        if($tag->produtcs()->count()>0) {
            session()->flash('success','voce nao pode deletar a tag!');
            return redirect( route('tag.index') );
        }

        $tag->delete();
        session()->flash('success','Fantoy foi apagado com sucesso!');
        return redirect( route('tag.index') );
    }
}
