<?php

namespace App\Services\Branches;

use App\Repositories\BranchRepository;


class RetrievingAllBranchesService {

    protected $repo;

    public function __construct(BranchRepository $repo)
    {
        $this->repo = $repo;
    }


    public function execute()
    {    
        if ($this->repo->getAll())
        {
            return $this->repo->getAll()->get();
        }
        else {
            return response()->json([
                "message" => "Branches not found"
            ], 404);
        }
    }

    
}
