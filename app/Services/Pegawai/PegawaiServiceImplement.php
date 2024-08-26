<?php

namespace App\Services\Pegawai;

use LaravelEasyRepository\ServiceApi;
use App\Repositories\Pegawai\PegawaiRepository;

class PegawaiServiceImplement extends ServiceApi implements PegawaiService{

    /**
     * set title message api for CRUD
     * @param string $title
     */
     protected $title = "";
     /**
     * uncomment this to override the default message
     * protected $create_message = "";
     * protected $update_message = "";
     * protected $delete_message = "";
     */

     /**
     * don't change $this->mainRepository variable name
     * because used in extends service class
     */
     protected $mainRepository;

    public function __construct(PegawaiRepository $mainRepository)
    {
      $this->mainRepository = $mainRepository;
    }

    // Define your custom methods :)
}
