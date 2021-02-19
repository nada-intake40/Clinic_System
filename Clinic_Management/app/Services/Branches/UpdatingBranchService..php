<?php

namespace App\Services\Branches;

use App\Repositories\BranchRepository;


class UpdatingBranchService {

    protected $repo;

    public function __construct(BranchRepository $repo)
    {
        $this->repo = $repo;
    }


    public function execute($id , array $request)
    {    
        if ($this->repo->getById($id) !== null)
        {
            $this->repo->getById($id)->update($request);
            return redirect()->route('branches.index');

        }
    }

    
}
