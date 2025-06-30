<?php
namespace App\GraphQL\Resolvers;

use App\Repositories\LogRepositoryInterface;

class LogResolver
{
    protected $logs;

    public function __construct(LogRepositoryInterface $logs)
    {
        $this->logs = $logs;
    }

    public function list($root, array $args, $context, $resolveInfo)
    {
        return $this->logs->all([
            'from' => $args['from'] ?? null,
            'to' => $args['to'] ?? null
        ]);
    }
}
// namespace App\GraphQL\Resolvers;
// use App\Repositories\LogRepositoryInterface;
// use App\Models\Log;

// class LogResolver {
//     public function list($root, array $args, LogRepositoryInterface $logs) {
//         return $logs->all(['from'=>$args['from'] ?? null,'to'=>$args['to'] ?? null]);
//     }
//     public function update($root, array $args, LogRepositoryInterface $logs) {
//         $log = Log::findOrFail($args['id']);
//         $log->username = $args['username'];
//         $log->save();
//         return $log;
//     }
//     public function delete($root, array $args) {
//         return Log::destroy($args['id']) > 0;
//     }
// }