<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class MostAnticipated extends Component
{
    public $mostAnticipatedUnformatted = [];

    public function loadMostAnticipated()
    {
        $afterFourMonths = Carbon::now()->addMonths(4)->timestamp;
        $current = Carbon::now()->timestamp;

        $this->mostAnticipatedUnformatted = Cache::remember('most-anticipated', 7, function () use ($afterFourMonths, $current) {
            return Http::withHeaders(config('services.igdb.headers'))
            ->withBody(
                "fields name, cover.url, first_release_date, total_rating_count, platforms.abbreviation, rating, rating_count, summary, slug;
                        where platforms = (48,49,130,6)
                        & (first_release_date >= {$current}
                        & first_release_date < {$afterFourMonths}
                        );
                        sort total_rating_count desc;
                        limit 4;",
                "text/plain"
            )->post(config('services.igdb.endpoint'))
            ->json();
        });
    }

    public function render()
    {
        return view('livewire.most-anticipated');
    }
}
