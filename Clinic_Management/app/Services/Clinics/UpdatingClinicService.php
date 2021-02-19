<?php

namespace App\Services\Clinics;

use App\Repositories\ClinicRepository;


class UpdatingClinicService {

    protected $repo;

    public function __construct(ClinicRepository $repo)
    {
        $this->repo = $repo;
    }


    public function execute($id , array $request)
    {    
        if ($this->repo->getById($id) !== null)
        {
            $this->repo->getById($id)->update($request);
            return redirect()->route('clinics.index');

        }
    }

    
}
