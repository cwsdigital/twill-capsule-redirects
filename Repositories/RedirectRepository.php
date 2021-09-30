<?php

namespace App\Twill\Capsules\Redirects\Repositories;



use App\Twill\Capsules\Base\ModuleRepository;
use App\Twill\Capsules\Redirects\Models\Redirect;

class RedirectRepository extends ModuleRepository
{


    public function __construct(Redirect $model)
    {
        $this->model = $model;
    }
}
