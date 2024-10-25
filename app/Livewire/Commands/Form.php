<?php

namespace App\Livewire\Commands;

use Livewire\Component;

class Form extends Component
{

    public $name;
    public $input;
    public $output;
    public $description;

    public function updatedInput()
    {
        if (empty($this->input)) {
            $this->output = 'Comando não pode estar vazio.';
            return;
        }

        $this->output = shell_exec($this->input) ?? 'Erro ao executar o comando.';
    }
    public function render()
    {
        return view('livewire.commands.form');
    }
}
