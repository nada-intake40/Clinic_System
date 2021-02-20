<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Branches\StoringBranchService;
use App\Services\Branches\UpdatingBranchService;
use App\Services\Branches\RetrievingBranchService;
use App\Services\Branches\RetrievingAllBranchesService;
use App\Http\Requests\StoringBranchRequest;

class BranchController extends Controller
{
    public function index(RetrievingAllBranchesService $service)
    {
       
        return view('Branches.index',['branches' => $service->execute()]);
    }

    public function create($id){
        return view('Branches.create',['clinic'=>$id]);
    }

    public function store(StoringBranchRequest $request , StoringBranchService $service)
    {
        return $service->execute($request->validated());
    }

    public function edit($id,RetrievingBranchService $service)
    {
        $branch = $service->execute($id);
        return view('Branches.edit',['branch' => $branch]);
    }

    public function update($id,StoringBranchRequest $request , UpdatingBranchService $service)
    {
        $service->execute($id, $request->validated());
        return redirect()->route('branches.index');
    }
}
