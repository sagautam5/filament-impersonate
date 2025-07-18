<?php

namespace STS\FilamentImpersonate\Actions;

use Filament\Actions\Action;
use STS\FilamentImpersonate\Concerns\Impersonates;

class Impersonate extends Action
{
    use Impersonates;

    protected function setUp(): void
    {
        parent::setUp();

        $this
            ->label(__('filament-impersonate::action.label'))
            ->icon('impersonate-icon')
            ->action(fn ($record) => $this->impersonate($record))
            ->hidden(fn ($record) => !$this->canBeImpersonated($record));
    }
}
