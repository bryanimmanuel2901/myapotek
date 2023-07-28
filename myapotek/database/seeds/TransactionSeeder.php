<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert([
            'user_id' => 1,
            'transaction_date' => '2021-03-21 20:02:00',
            'grandtotal' => 124500
        ]);

        DB::table('transactions')->insert([
            'user_id' => 1,
            'transaction_date' => '2021-05-21 04:00:01',
            'grandtotal' => 68000
        ]);

        DB::table('transactions')->insert([
            'user_id' => 2,
            'transaction_date' => '2021-08-20 16:50:02',
            'grandtotal' => 200000
        ]);

        DB::table('transactions')->insert([
            'user_id' => 3,
            'transaction_date' => '2021-10-20 10:15:03',
            'grandtotal' => 76000
        ]);

//////////////////////////////////////////////////////////////////////////////////////////////////////

        DB::table('transactions')->insert([
            'user_id' => 2,
            'transaction_date' => '2021-11-10 07:30:00',
            'grandtotal' => 82000
        ]);

        DB::table('transactions')->insert([
            'user_id' => 1,
            'transaction_date' => '2022-01-10 10:02:05',
            'grandtotal' => 25000
        ]);

//////////////////////////////////////////////////////////////////////////////////////////////////////

        DB::table('transactions')->insert([
            'user_id' => 3,
            'transaction_date' => '2022-02-20 15:22:11',
            'grandtotal' => 143000
        ]);

        DB::table('transactions')->insert([
            'user_id' => 3,
            'transaction_date' => '2022-03-10 12:12:33',
            'grandtotal' => 410750
        ]);

//////////////////////////////////////////////////////////////////////////////////////////////////////

        DB::table('transactions')->insert([
            'user_id' => 1,
            'transaction_date' => '2022-04-14 17:30:00',
            'grandtotal' => 173250
        ]);

        DB::table('transactions')->insert([
            'user_id' => 2,
            'transaction_date' => '2022-05-21 09:34:03',
            'grandtotal' => 86000
        ]);

        //////////////////////////////////////////////////////////////////////////////////////////////////////
    }
}
