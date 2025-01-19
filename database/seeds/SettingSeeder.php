<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Insert some stuff
        DB::table('settings')->insert(
            array(
                'id' => 1,
                'email' => 'admin@example.com',
                'currency_id' => 1,
                'client_id' => Null,
                'invoice_footer' => Null,
                'warehouse_id' => Null,
                'CompanyName' => 'Accounting',
                'CompanyPhone' => '6315996770',
                'CompanyAdress' => '3618 Abia Martin Drive',
                'footer' => 'Accounting - POS with Inventory Management',
                'developed_by' => 'Accounting',
                'app_name' => 'Accounting',
                'logo' => 'logo-default.svg',
                'default_sms_gateway' => 'twilio',
                'default_language' => 'en',
                'symbol_placement' => 'before',
            )
            
        );
    }
}
