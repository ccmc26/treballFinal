<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;

class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $logs = Log::get();
        return response()->json($logs);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $log = Log::create(request()->all());
        return response()->json([
            'message' => "creado correctamente",
            'log' => $log
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            // 'user_id' => 'required',
            'action' => 'required',
            'ip' => 'required',
            'table' => 'required',
            'table_id' => 'required'
        ]);
        $log = LogController::create($validated);

        return response()->json([
            'message' => "creado correctamente",
            'user' => $log
        ]);
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
        $logs = Log::find($id);

        if($logs){
            $logs->delete();
            return response()->json([
                'message' => 'Log borrado correctamente',
                'language' => $logs
            ]);
        }else{
            return response('No se ha podido eliminar porque no existe ningun log con el id indicado');
        }
    }
}
