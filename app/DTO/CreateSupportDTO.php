<?php
namespace App\DTO;

use App\Http\Requests\StoreUpdateSuportRequest;

class CreateSUpportDTO
{
    public function __construct(
        public string $subject,
        public string $status,
        public string $body,
    )
    {}

    public function makeFromRequest(StoreUpdateSuportRequest $request): self
    {
        return new self(
            $this->subject,
            'a',
            $request->body
        );
    }
}