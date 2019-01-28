<?php

use Illuminate\Database\Seeder;

class CompanySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1,
             'name' => 'alhendy', 
             'email' => 'alhendy@alhendy.com', 
             'logo' => '/tmp/phpZrxc9J', 
             'website' => 'alhendy.documentation.cairo2help.com'
            ]

        ];

        foreach ($items as $item) {
            \App\Models\Company::create($item);
        }
    }
}
