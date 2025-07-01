<?php
namespace App\GraphQL\Resolvers;

use App\Models\Log;
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

    public function update($root, array $args, $context, $resolveInfo)
    {
        return $this->logs->update([
            'id' => $args['id'],
            'username' => $args['username']
        ]);
    }

    public function delete($root, array $args, $context, $resolveInfo)
    {
        return $this->logs->delete([
            'id' => $args['id']
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
// }