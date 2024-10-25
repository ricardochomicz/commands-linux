<?php

namespace App\Services;

use App\Models\Command;
use Illuminate\Support\Facades\DB;

class CommandService
{

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
