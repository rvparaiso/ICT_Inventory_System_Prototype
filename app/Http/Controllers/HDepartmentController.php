<?php

namespace App\Http\Controllers;

use App\Models\HDepartment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Http\Requests\HDepartmentRequest;
use App\Http\Requests\HDepartmentUpdateRequest;

class HDepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $h_department = HDepartment::latest()->paginate(5);

        return view('HDepartment.index', compact('h_department'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('HDepartment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HDepartmentRequest $request): RedirectResponse
    {
        HDepartment::create($request->validated());

        return redirect()->route('HDepartment.index')
                        ->with('success', 'Department added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(HDepartment $HDepartment): View
    {
        return view('HDepartment.show',compact('HDepartment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HDepartment $HDepartment): View
    {
        return view('HDepartment.edit',compact('HDepartment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HDepartmentUpdateRequest $request, HDepartment $HDepartment): RedirectResponse
    {
        $HDepartment->update($request->validated());
          
        return redirect()->route('HDepartment.index')
                        ->with('success','Department updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HDepartment $HDepartment): RedirectResponse
    {
        $HDepartment->delete();
           
        return redirect()->route('HDepartment.index')
                        ->with('success','Department deleted successfully');
    }
}
