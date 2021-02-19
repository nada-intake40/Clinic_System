<?php

namespace App\Services\Clinics;

use App\Repositories\ClinicRepository;


class StoringClinicService {

    protected $repo;

    public function __construct(ClinicRepository $repo)
    {
        $this->repo = $repo;
    }


    public function execute(array $request)
    {    
        $clinic = $this->repo->create($request);
        if ($clinic)
        {
            return  redirect()->route('clinics.index');
        }
       return false ;
    }

    
}
