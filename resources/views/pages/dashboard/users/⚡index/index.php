<?php

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

new class extends Component
{
    use WithPagination;

    #[Computed]
    public function users()
    {
        return User::paginate(10, ['*'], 'page', null, null)
            ->withQueryString();
    }
};
