<?php

namespace App\Http\Controllers;

use App\Models\Command;
use App\Services\CommandService;
use Illuminate\Http\Request;

class CommandController extends Controller
{
    public function __construct(protected CommandService $commandService) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $view = [];
        return view('commands.index', $view);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('commands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $command = $this->commandService->store($request->all());
        if (!$command) return back();

        return redirect()->route('commands.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
