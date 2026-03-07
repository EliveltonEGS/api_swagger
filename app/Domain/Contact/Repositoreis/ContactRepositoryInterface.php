<?php

namespace Domain\Contact\Repositoreis;

use Domain\Contact\Entities\Contact;
use Illuminate\Database\Eloquent\Collection;

interface ContactRepositoryInterface
{
    public function store(Contact $contact): void;
    public function show(string $id): ?Contact;
    public function all(): Collection;
}
