<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Osiset\ShopifyApp\Storage\Models\Plan;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $premium = new Plan();
        $premium->name = "App Name";
        $premium->type = 'RECURRING';
        $premium->price = 0;
        $premium->capped_amount = 29.99;
        $premium->terms = "starts at $ 5.99";
        $premium->trial_days = 0;
        $premium->on_install = 1;
        $premium->save();
    }
}
