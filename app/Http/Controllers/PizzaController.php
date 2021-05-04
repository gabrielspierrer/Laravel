<?php

namespace App\Http\Controllers;

use App\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['pizzas']=Pizza::paginate(5);
        return view('pizzas.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pizzas.create');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $datos['pizzas'] = Pizza::where('tipo', 'like', '%'.$search.'%')->paginate(5);
        return view('pizzas.index', $datos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$pizzas=request()->all();
        $datosPizzas=request()->except('_token');
        Pizza::insert($datosPizzas);
        return redirect('pizzas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pizza  $pizza
     * @return \Illuminate\Http\Response
     */
    public function show(Pizza $pizza)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pizza  $pizza
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pizza=Pizza::findOrFail($id);
        return view('pizzas.edit', compact('pizza'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pizza  $pizza
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosPizzas=request()->except(['_token', '_method']);
        Pizza::where('id', '=', $id)->update($datosPizzas);

        $pizza=Pizza::findOrFail($id);
        return view('pizzas.edit', compact('pizza'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pizza  $pizza
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pizza::destroy($id);
        return redirect('pizzas');
    }
}
