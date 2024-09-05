<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DepartRequest;
use App\Models\Depart;
use App\Services\DepartService;
use Illuminate\Http\Request;


class DepartController extends Controller
{
    public function __construct(protected DepartService $departService){}

    public function index(): \Illuminate\Contracts\View\View
    {
        return view('admin.depart.index', [
            'departs' => Depart::all()
        ]);
    }

    public function create(): \Illuminate\Contracts\View\View
    {
        return view('admin.depart.create');
    }

    public function store(DepartRequest $request): \Illuminate\Http\RedirectResponse
    {
        $this->departService->create($request);
        return redirect()->route('admin.departs');
    }

    public function edit(Depart $depart): \Illuminate\Contracts\View\View
    {
        return view('admin.depart.update', [
            'depart' => $depart
        ]);
    }

    public function update(Request $request, Depart $depart)
    {
        $depart->update($request->all());
        return redirect()->route('admin.departs');
    }

    public function destroy(Depart $depart)
    {
        $depart->delete();
        return redirect()->route('admin.departs');
    }
}
