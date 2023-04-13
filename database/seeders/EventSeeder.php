<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            [
                'event' => 'Cita #1',
                'start_date' =>  '2023-04-12 8:00',
                'end_date' => '2023-04-13 11:00',
            ],

            [
                'event' => 'Cita #1',
                'start_date' =>  '2023-04-12 8:00',
                'end_date' => '2023-04-13 11:00',
            ],

            [
                'event' => 'Cita #1',
                'start_date' =>  '2023-04-12 8:00',
                'end_date' => '2023-04-13 11:00',
            ],
        ];
        foreach ($events as $event){
            Event::create($event);
        }
    }
}
