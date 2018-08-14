<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Settings::create([
        	'site_name' => "Laravel blog",
        	'address' => "Bs Ks",
        	'contact_number' => "0885 vinagi zaet nikoga napred",
        	'contact_email' => "ekek@abv.bg",
		]);
    }
}
