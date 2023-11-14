<?php
namespace App\DTO;

use App\Http\Requests\StoreUpdateSuportRequest;

class CreateSupportDTO

{
    public function __construct(
        public string $subject,
        public string $status,
        public string $body,
    )
    {}

    public static function makeFromRequest(StoreUpdateSuportRequest $request): self
    {
        return new self(
            $request->subject,
            'a',
            $request->body
        );
    }
}