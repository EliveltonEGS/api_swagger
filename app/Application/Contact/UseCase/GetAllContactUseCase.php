<?php

namespace Application\Contact\UseCase;

use Domain\Contact\Services\ContactService;
use Illuminate\Database\Eloquent\Collection;

class GetAllContactUseCase
{
    public function __construct(
        private ContactService $contactService
    ) {}

    public function execute(): Collection
    {
        return $this->contactService->all();
    }
}
