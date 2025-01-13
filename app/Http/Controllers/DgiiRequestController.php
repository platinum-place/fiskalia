<?php

namespace App\Http\Controllers;

use App\Services\DgiiRequestService;
use App\Services\SequenceService;
use Illuminate\Http\Request;

class DgiiRequestController extends Controller
{
    public function __construct(protected DgiiRequestService $service, protected SequenceService $sequenceService) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
