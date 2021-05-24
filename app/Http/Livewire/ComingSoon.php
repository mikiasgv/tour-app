<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class ComingSoon extends Component
{
    public $comingSoonUnformatted = [];

    public function loadComingSoon()
    {
        $current = Carbon::now()->timestamp;

        $this->comingSoonUnformatted = Http::withHeaders(config('services.igdb.headers'))
            ->withBody(
                "fields name, cover.url, first_release_date, platforms.abbreviation, rating, rating_count, summary, slug;
                    where platforms = (48,49,130,6)
                    & (first_release_date >= {$current}
                    );
                    sort first_release_date asc;
                    limit 4;
                ",
                "text/plain"
            )->post(config('services.igdb.endpoint'))
            ->json();
    }
    public function render()
    {
        return view('livewire.coming-soon');
    }
}