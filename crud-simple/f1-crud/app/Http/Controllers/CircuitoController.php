<?php

namespace App\Http\Controllers;

use App\Models\Circuito;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\CircuitoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CircuitoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $circuitos = Circuito::paginate();

        return view('circuito.index', compact('circuitos'))
            ->with('i', ($request->input('page', 1) - 1) * $circuitos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $circuito = new Circuito();

        return view('circuito.create', compact('circuito'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CircuitoRequest $request): RedirectResponse
    {
        Circuito::create($request->validated());

        return Redirect::route('circuitos.index')
            ->with('success', 'Circuito created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $circuito = Circuito::find($id);

        return view('circuito.edit', compact('circuito'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CircuitoRequest $request, Circuito $circuito): RedirectResponse
    {
        $circuito->update($request->validated());

        return Redirect::route('circuitos.index')
            ->with('success', 'Circuito updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Circuito::find($id)->delete();

        return Redirect::route('circuitos.index')
            ->with('success', 'Circuito deleted successfully');
    }
}
