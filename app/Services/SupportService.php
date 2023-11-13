<?php

namespace App\Services;

use App\DTO\CreateSUpportDTO;
use App\DTO\UpdateSupportDTO;
use stdClass;

class SupportService
{
    protected $repository; 

    public function __construct()
    {
        
    }

    public function getall(string $filter = null): array
    {
       return $this->repository->getall($filter);
    }

    public function findOne(string $id): stdClass |null
    {
        return $this->repository->findOne($id);
    }
    
    public function new(CreateSUpportDTO $dto): stdClass
    {
        return $this->repository->new();
    }
    public function update(UpdateSupportDTO $dto):stdClass|null
    {
    return $this->repository->update($dto);
    }
     
    public function delete(string $id): void
   {
        $this->repository->delete($id);
   }
}