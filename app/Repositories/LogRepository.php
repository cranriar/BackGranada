<?php
namespace App\Repositories;
use App\Models\Log;

class LogRepository implements LogRepositoryInterface {
    public function save(array $data): Log {
        return Log::create($data);
    }
    public function all(array $filter = []): \Illuminate\Database\Eloquent\Collection {
        $q = Log::query();
        if(!empty($filter['from'])) $q->where('requested_at','>=',$filter['from']);
        if(!empty($filter['to']))   $q->where('requested_at','<=',$filter['to']);
        return $q->get();
    }
}