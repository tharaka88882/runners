<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $meeting = new \App\Models\Meeting();
        $meeting->external_id = '01';
        $meeting->name = 'Meeting 01';
        $meeting->save();

        $rases = new  \App\Models\Race();
        $rases->external_id = '01';
        $rases->name = 'race 01';
        $rases->meeting_id = '1';
        $rases->save();

        $runners = new  \App\Models\Runner();
        $runners->external_id = '01';
        $runners->name = 'thusitha';
        $runners->race_id = '1';
        $runners->save();

        $form_data = new \App\Models\FormData();
        $form_data->runner_id=$runners->id;
        $form_data->sex="G";
        $form_data->color="B";
        $form_data->age="4";
        $form_data->owner="Oti racing";
        $form_data->career="8:1-2-2";
        $form_data->_1st_up ="1:0-0-1";
        $form_data->_2nd_up ="1:0-1-0";
        $form_data->_3rd_up ="0:0-0-0";
        $form_data->save();

        $last_runs = new \App\Models\FormLastRun();
        $last_runs->runner_id=  $runners->id;
        $last_runs->dt_tot= '2/11';
        $last_runs->num= '2050';
        $last_runs->name= 'Navan';
        $last_runs->date= '4-Aug-21';
        $last_runs->price= 10;
        $last_runs->save();


    }
}
