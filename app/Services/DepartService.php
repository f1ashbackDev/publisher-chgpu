<?php

namespace App\Services;

use App\Models\Depart;
use Illuminate\Http\Request;

class DepartService
{
    public function __construct(Depart $depart)
    {
        $this->depart = $depart;
    }
    public function create($request)
    {
        $this->depart::create([
            'name' => $request->name,
            'total_count' => $request->total_count,
        ]);
        return true;
    }

    public function setMoney(Depart $depart, $money)
    {
        $depart->update([
            'total_count' => $money
        ]);
        return true;
    }

    public function getMoney(Depart $depart)
    {
//        return $depart->
    }
}
