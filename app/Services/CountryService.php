<?php
namespace App\Services;
use Illuminate\Support\Facades\Http;

class CountryService {
    public function densest(int $limit): array {
        $resp = Http::get('https://restcountries.com/v3.1/all?fields=name,flags,area,population')->json();
        $list = array_map(function($c){
            $area = $c['area'] ?? 0;
            $pop  = $c['population'] ?? 0;
            $flag = $c['flags']['png'] ?? null;
            // dd('Country data', $c, 'Area:', $area, 'Population:', $pop, 'Flag:', $flag);
            return [
                'name'      => $c['name']['common'] ?? null,
                'area'      => $area,
                'population'=> $pop,
                'density'   => $pop / max(1, $area),
            ];
        }, $resp);
        usort($list, fn($a,$b)=>$b['density']<=>$a['density']);
        return array_slice($list, 0, $limit);
    }
}