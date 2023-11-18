<?php

namespace App\Http\Controllers;

use App\Models\Concepto;
use Illuminate\Http\Request;

/**
 * Class ConceptoController
 * @package App\Http\Controllers
 */
class ConceptoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conceptos = Concepto::paginate();

        return view('concepto.index', compact('conceptos'))
            ->with('i', (request()->input('page', 1) - 1) * $conceptos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $concepto = new Concepto();
        return view('concepto.create', compact('concepto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Concepto::$rules);

        $concepto = Concepto::create($request->all());

        return redirect()->route('conceptos.index')
            ->with('success', 'Concepto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $concepto = Concepto::find($id);

        return view('concepto.show', compact('concepto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $concepto = Concepto::find($id);

        return view('concepto.edit', compact('concepto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Concepto $concepto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Concepto $concepto)
    {
        request()->validate(Concepto::$rules);

        $concepto->update($request->all());

        return redirect()->route('conceptos.index')
            ->with('success', 'Concepto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $concepto = Concepto::find($id)->delete();

        return redirect()->route('conceptos.index')
            ->with('success', 'Concepto deleted successfully');
    }
}
