<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Crypt;

class tblmasteradmin_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tblmasteradmin')->insert([
            'name'=>'Nishant',
            'email'=>'nishant@admin.com',
            'username'=>'Nishant Nagdeve',
            'password'=>Crypt::encrypt('admin'),
            
        ]);
    }
}
