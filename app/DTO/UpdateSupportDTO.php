<?php
namespace App\DTO;

use App\Http\Requests\StoreUpdateSuportRequest;

class UpdateSupportDTO
{
    public function __construct(
        public string $id,
        public string $subject,
        public string $status,
        public string $body,
    )
    {}

    public function makeFromRequest(StoreUpdateSuportRequest $request): self
    {
        return new self(
            $request->id,
            $request->subject,
            'a',
            $request->body
        );
    }
}