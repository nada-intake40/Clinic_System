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
        if (!$this->repo->getAll()->isEmpty())
        {
            return $this->repo->getAll();
        }
        else {
            return response()->json([
                "message" => "Branches not found"
            ], 404);
        }
    }

    
}
