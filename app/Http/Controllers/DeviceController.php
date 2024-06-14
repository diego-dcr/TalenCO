<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Request;

use App\Models\Device;
use App\Models\Report;
use App\Models\Status;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $devices = Device::all();
        $status = Status::all();
        $reports = Report::all();
        return view('dashboard', compact('devices', 'reports', 'status'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $device = new Device($request->all());
            $device->status_id = 1;
            $device->save();

            return redirect()->route('dashboard');

        } catch (\Exception $e) {
            return $e->getMessage();
        }
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
    public function update(Request $request)
    {
        try {
            $deviceId = $request->input('device_id');

            if ($deviceId) {
                $device = Device::find($deviceId);
                $device->status_id = $request->input('status_id');
                $device->save();
            }
    
            return redirect()->route('dashboard');
            
        } catch (\Exception $e) {
            return $e->getMessage();
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
