<?php

namespace App\Repositories;

use App\Models\Branch;

class BranchRepository extends BaseRepository
{
    public function __construct(Branch $branch)
    {
        parent::__construct($branch);
    }

}