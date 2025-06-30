<?php
namespace App\GraphQL\Resolvers;
use App\Services\CountryService;
use App\Repositories\LogRepositoryInterface;

class CountryResolver {
    protected $logs;
    protected $svc;
    
    public function __construct(LogRepositoryInterface $logs, CountryService $svc) {
        $this->logs = $logs;
        $this->svc = $svc;
    }
    public function topDensity($root, array $args) {
        // dd('topDensity resolver called', $args);
        $countries = $this->svc->densest($args['limit']);
        $this->logs->save([
            'username' => $args['username'],
            'requested_at' => now(),
            'count' => count($countries),
            'countries_details' => $countries,
        ]);
        return $countries;
    }
    // public function topDensity($root, array $args, CountryService $svc, LogRepositoryInterface $logs) {
    //     dd('topDensity resolver called', $args);
    //     $countries = $svc->densest($args['limit']);
    //     $logs->save([
    //         'username' => $args['username'],
    //         'requested_at' => now(),
    //         'count' => count($countries),
    //         'countries_details' => $countries,
    //     ]);
    //     return $countries;
    // }
}