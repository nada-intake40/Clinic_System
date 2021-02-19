<?php

namespace App\Services\Clinics;

use App\Repositories\ClinicRepository;


class RetrievingAllClinicsService {

    protected $repo;

    public function __construct(ClinicRepository $repo)
    {
        $this->repo = $repo;
    }


    public function execute()
    {    
        if (!$this->repo->getAll()->isEmpty())
        {
            return $this->repo->getAll()->paginate(5);
        }
        else {
            return response()->json([
                "message" => "Clinics not found"
            ], 404);
        }
    }

    
}
