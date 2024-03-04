<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonalRequest;
use App\Models\Personal;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $personal = Personal::all();
        return view('personal.index', compact('personal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('personal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PersonalRequest $request
     * @return RedirectResponse
     */
    public function store(PersonalRequest $request): RedirectResponse
    {
        Personal::create($request->validated());
        return redirect()->route('personal.index')->with('success', 'Empleado creado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param Personal $personal
     * @return View
     */
    public function show(Personal $personal): View
    {
        return view('personal.show', compact('personal'));
    }

    /**
     * Show the form for editing the specified resource.
     * 
     */
    public function edit(Personal $personal): View
    {
        return view('personal.edit', compact('personal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PersonalRequest $request
     * @param Personal $personal
     * @return RedirectResponse
     */
    public function update(PersonalRequest $request, Personal $personal): RedirectResponse
    {
        $personal->update($request->validated());
        return redirect()->route('personal.index')->with('success', 'Empleado actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Personal $personal
     * @return RedirectResponse
     */
    public function destroy(Personal $personal): RedirectResponse
    {
        $personal->delete();
        return redirect()->route('personal.index')->with('success', 'Empleado eliminado con éxito.');
    }
}
