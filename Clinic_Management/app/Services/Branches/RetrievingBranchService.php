<?php

namespace App\Services\Branches;

use App\Repositories\BranchRepository;


class RetrievingBranchService {

    protected $repo;

    public function __construct(BranchRepository $repo)
    {
        $this->repo = $repo;
    }


    public function execute($id)
    {    
        if ($this->repo->getById($id)!== null)
        {
            return $this->repo->getById($id);
        }
        else {
            return response()->json([
                "message" => "Branch not found"
            ], 404);
        }
    }

    
}
