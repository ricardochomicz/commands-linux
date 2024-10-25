<?php

namespace App\Services;

use App\Models\Command;
use Illuminate\Support\Facades\DB;

class CommandService
{

    public function index(array $data)
    {
        $commands = Command::filter($data);
        return $commands->paginate();
    }

    public function store($data)
    {
        try {
            DB::beginTransaction();

            $command = new Command($data);
            $command->save();

            DB::commit();
            return true;
        } catch (\Throwable $th) {
            DB::rollBack();
            return false;
            //throw $th;
        }
    }
}
