<?php

use Illuminate\Database\Seeder;
use App\Event;

class AddDummyEvent extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['title'=>'Walter Birthday', 'start_date'=>'2018-09-02', 'end_date'=>'2018-09-02'],
            ['title'=>'Jackie Birthday', 'start_date'=>'2018-07-16', 'end_date'=>'2018-07-16'],
            ['title'=>'Nolan Birthday', 'start_date'=>'2018-05-18', 'end_date'=>'2018-05-18'],
            ['title'=>'Edice Birthday', 'start_date'=>'2018-03-29', 'end_date'=>'2018-03-29'],
        ];
        foreach ($data as $key => $value) {
            Event::create($value);
        }
    }
}
