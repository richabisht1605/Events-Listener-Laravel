<?php

namespace App\Listners;
use Illuminate\Support\Facades\Storage;
use App\Events\TestEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class TestListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(TestEvent $event): void
    {
        Storage::put("name.txt", "Hi, I'm {$event->name}");
    }
}
