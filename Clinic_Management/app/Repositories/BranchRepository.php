<?php

namespace App\Repositories;

use App\Models\Branch;

class ClinicRepository extends BaseRepository
{
    public function __construct(Branch $branch)
    {
        parent::__construct($branch);
    }

}