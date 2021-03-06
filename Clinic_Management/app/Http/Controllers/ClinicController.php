<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Clinics\RetrievingAllClinicsService;
use App\Services\Clinics\RetrievingClinicService;
use App\Services\Clinics\StoringClinicService;
use App\Services\Clinics\UpdatingClinicService;
use App\Http\Requests\StoringClinicRequest;

class ClinicController extends Controller
{
    public function index(RetrievingAllClinicsService $service)
    {
        return view('Clinics.index',['clinics' => $service->execute()]);
    }

    public function show (RetrievingClinicService $service , $id)
    {
        return view('Clinics.show',['clinic'=>$service->execute($id)]);
    }

    public function create(){
        return view('Clinics.create');
    }

    public function store(StoringClinicRequest $request , StoringClinicService $service)
    {
        return $service->execute($request->validated());
    }

    public function edit($id,RetrievingClinicService $service)
    {
        $clinic = $service->execute($id);
        return view('Clinics.edit',['clinic' => $clinic]);
    }

    public function update($id,StoringClinicRequest $request , UpdatingClinicService $service)
    {
        $service->execute($id, $request->validated());
        return redirect()->route('clinics.index');
    }
}
