<?php

namespace App\Http\Controllers;

use App\Models\Obra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ObraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obra = Obra::all();
        return view('obras.catalogo', ['obras' => $obra]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('obras.adicionar-obra');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => ['required', 'max:255', 'unique:obras,titulo'],
            'lancamento' => ['required']
        ]);

        $obra = Obra::create([
            'titulo' => $request->input('titulo'),
            'lancamento' => $request->input('lancamento'),
            'user_id' => Auth::id()
        ]);

        return redirect('/catalogo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obra = Obra::find($id);
        return view('obras.editar-obra')->with('obra', $obra);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $obra = Obra::where('id', $id)->update([
            'titulo' => $request->input('titulo'),
            'lancamento' => $request->input('lancamento')
        ]);

        return redirect('/catalogo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obra = Obra::find($id);
        $obra -> delete();

        return redirect('catalogo');
    }
}
