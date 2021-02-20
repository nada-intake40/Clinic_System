<?php

namespace App\Services\Clinics;

use App\Repositories\ClinicRepository;


class RetrievingClinicService {

    protected $repo;

    public function __construct(ClinicRepository $repo)
    {
        $this->repo = $repo;
    }


    public function execute($id)
    {    
        if ($this->repo->getById($id) != null)
        {
            return $this->repo->getById($id);
        }
        else {
            return response()->json([
                "message" => "Clinic not found"
            ], 404);
        }
    }

    
}
