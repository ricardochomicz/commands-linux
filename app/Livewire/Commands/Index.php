<?php

namespace App\Livewire\Commands;

use App\Models\Command;
use App\Services\CommandService;
use Livewire\Attributes\Url;
use Livewire\Component;

class Index extends Component
{
    #[Url(history: true)]
    public string $search = '';

    public $selectedCommand;
    public bool $isModalOpen = false;

    protected function queryString(): array
    {
        return [
            'search' => ['except' => ''],
        ];
    }

    public function render()
    {
        $commands = new CommandService();
        $filters = [
            'search' => $this->search
        ];
        return view('livewire.commands.index', [
            'data' => $commands->index($filters),
        ]);
    }

    public function loadDescription($id)
    {
        $command = Command::find($id);
        $this->selectedCommand = $command;
        $this->isModalOpen = true;
    }

    public function closeModal()
    {
        $this->isModalOpen = false;
    }
}
