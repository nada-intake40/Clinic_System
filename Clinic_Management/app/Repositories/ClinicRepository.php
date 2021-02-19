<?php

namespace App\Repositories;

use App\Models\Clinic;

class ClinicRepository extends BaseRepository
{
    public function __construct(Clinic $clinic)
    {
        parent::__construct($clinic);
    }

}