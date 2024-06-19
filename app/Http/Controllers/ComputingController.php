<?php

namespace App\Http\Controllers;

use App\Models\Computing;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Http\Requests\ComputingRequest;
use App\Http\Requests\ComputingUpdateRequest;

class ComputingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $computing_device = Computing::latest()->paginate(5);
          
        return view('Computing.index', compact('computing_device'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('Computing.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ComputingRequest $request): RedirectResponse
    {
        Computing::create($request->validated());
           
        return redirect()->route('Computing.index')
                         ->with('success', 'Computing Device created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Computing $Computing): View
    {
        return view('Computing.show',compact('Computing'));
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Computing $Computingt) : View
    {
        return view('Computing.edit', compact('Computing'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ComputingUpdateRequest $request, Computing $Computing) : RedirectResponse
    {
        $Computing->update($request->validated());

        return redirect()->route('Computingt.index')
        ->with('success','Computing Devices updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Computing $Computing): RedirectResponse
    {
        $Computing->delete();
           
        return redirect()->route('Computing.index')
                        ->with('success','Computing Device deleted successfully');
    }
}
