<?php

namespace App\Http\Controllers;

use App\Models\Mapcota;
use Illuminate\Http\Request;

/**
 * Class MapcotaController
 * @package App\Http\Controllers
 */
class MapcotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mapcotas = Mapcota::paginate();

        return view('mapcota.index', compact('mapcotas'))
            ->with('i', (request()->input('page', 1) - 1) * $mapcotas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mapcota = new Mapcota();
        return view('mapcota.create', compact('mapcota'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Mapcota::$rules);

        $mapcota = Mapcota::create($request->except('confirm_password'));

        if($request->hasFile('foto')){
            $mapcota['foto']=$request->file('foto')->store('uploads','public');
        }

        return redirect()->route('mapcotas.index')
            ->with('success', '¡Tu cuenta ha sido creada correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mapcota = Mapcota::find($id);

        return view('mapcota.show', compact('mapcota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mapcota = Mapcota::find($id);

        return view('mapcota.edit', compact('mapcota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Mapcota $mapcota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mapcota $mapcota)
    {
        request()->validate(Mapcota::$rules);

        $mapcota->update($request->all());

        return redirect()->route('mapcotas.index')
            ->with('success', 'Mapcota updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $mapcota = Mapcota::find($id)->delete();

        return redirect()->route('mapcotas.index')
            ->with('success', 'Mapcota deleted successfully');
    }
}
