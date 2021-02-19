<?php

namespace App\Services\Branches;

use App\Repositories\BranchRepository;


class StoringBranchService {

    protected $repo;

    public function __construct(BranchRepository $repo)
    {
        $this->repo = $repo;
    }


    public function execute(array $request)
    {    
        $branch = $this->repo->create($request);
        if ($branch)
        {
            return  redirect()->route('branches.index');
        }
       return false ;
    }

    
}
