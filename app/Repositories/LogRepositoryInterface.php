<?php
namespace App\Repositories;
use App\Models\Log;
interface LogRepositoryInterface {
    public function save(array $data): Log;
    public function all(array $filter = []): \Illuminate\Database\Eloquent\Collection;
    // public function resolveList(array $params = []): \Illuminate\Database\Eloquent\Collection;
}