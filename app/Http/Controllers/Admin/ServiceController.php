<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('admin.service.index',[
            'services' => Service::all()
        ]);
    }

    public function store(Request $request)
    {
        Service::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
        ]);
        return redirect()->route('admin.services');
    }

    public function update(Request $request, Service $service)
    {

    }

    public function destroy(Service $service)
    {

    }
}
