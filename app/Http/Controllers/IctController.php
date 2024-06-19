<?php

namespace App\Http\Controllers;

use App\Models\Ict;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Http\Requests\IctRequest;
use App\Http\Requests\IctUpdateRequest;

class IctController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $ict_devices = Ict::latest()->paginate(5);
          
        return view('Ict.index', compact('ict_devices'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('Ict.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(IctRequest $request): RedirectResponse
    {
        Ict::create($request->validated());
           
        return redirect()->route('Ict.index')
                         ->with('success', 'Ict Device created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ict $Ict): View
    {
        return view('Ict.show',compact('Ict'));
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ict $Ict) : View
    {
        return view('Ict.edit', compact('Ict'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(IctUpdateRequest $request, Ict $Ict) : RedirectResponse
    {
        $Ict->update($request->validated());

        return redirect()->route('Ict.index')
        ->with('success','Ict Devices updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ict $Ict): RedirectResponse
    {
        $Ict->delete();
           
        return redirect()->route('Ict.index')
                        ->with('success','Ict Device deleted successfully');
    }
}
