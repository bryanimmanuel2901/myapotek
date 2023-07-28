<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicineTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicine_transaction')->insert([
            'medicine_id' => 1,
            'transaction_id' => 1,
            'quantity' => 3,
            'subtotal' => 30000
        ]);

        DB::table('medicine_transaction')->insert([
            'medicine_id' => 11,
            'transaction_id' => 1,
            'quantity' => 2,
            'subtotal' => 24500
        ]);

        DB::table('medicine_transaction')->insert([
            'medicine_id' => 16,
            'transaction_id' => 1,
            'quantity' => 2,
            'subtotal' => 70000
        ]);

        DB::table('medicine_transaction')->insert([
            'medicine_id' => 8,
            'transaction_id' => 2,
            'quantity' => 2,
            'subtotal' => 35000
        ]);

        DB::table('medicine_transaction')->insert([
            'medicine_id' => 10,
            'transaction_id' => 2,
            'quantity' => 2,
            'subtotal' => 33000
        ]);

        DB::table('medicine_transaction')->insert([
            'medicine_id' => 7,
            'transaction_id' => 3,
            'quantity' => 8,
            'subtotal' => 200000
        ]);

        DB::table('medicine_transaction')->insert([
            'medicine_id' => 4,
            'transaction_id' => 4,
            'quantity' => 8,
            'subtotal' => 76000
        ]);

        DB::table('medicine_transaction')->insert([
            'medicine_id' => 3,
            'transaction_id' => 5,
            'quantity' => 2,
            'subtotal' => 16000
        ]);

        DB::table('medicine_transaction')->insert([
            'medicine_id' => 6,
            'transaction_id' => 5,
            'quantity' => 3,
            'subtotal' => 66000
        ]);

        DB::table('medicine_transaction')->insert([
            'medicine_id' => 7,
            'transaction_id' => 6,
            'quantity' => 1,
            'subtotal' => 25000
        ]);
        
        DB::table('medicine_transaction')->insert([
            'medicine_id' => 4,
            'transaction_id' => 7,
            'quantity' => 4,
            'subtotal' => 38000
        ]);
        
        DB::table('medicine_transaction')->insert([
            'medicine_id' => 9,
            'transaction_id' => 7,
            'quantity' => 6,
            'subtotal' => 105000
        ]);

        DB::table('medicine_transaction')->insert([
            'medicine_id' => 7,
            'transaction_id' => 8,
            'quantity' => 5,
            'subtotal' => 125000
        ]);
        
        DB::table('medicine_transaction')->insert([
            'medicine_id' => 12,
            'transaction_id' => 8,
            'quantity' => 7,
            'subtotal' => 85750
        ]);

        DB::table('medicine_transaction')->insert([
            'medicine_id' => 16,
            'transaction_id' => 8,
            'quantity' => 4,
            'subtotal' => 140000
        ]);
        
        DB::table('medicine_transaction')->insert([
            'medicine_id' => 2,
            'transaction_id' => 8,
            'quantity' => 5,
            'subtotal' => 60000
        ]);

        DB::table('medicine_transaction')->insert([
            'medicine_id' => 3,
            'transaction_id' => 9,
            'quantity' => 3,
            'subtotal' => 24000
        ]);

        DB::table('medicine_transaction')->insert([
            'medicine_id' => 6,
            'transaction_id' => 9,
            'quantity' => 4,
            'subtotal' => 88000
        ]);

        DB::table('medicine_transaction')->insert([
            'medicine_id' => 12,
            'transaction_id' => 9,
            'quantity' => 5,
            'subtotal' => 61250
        ]);
        
        DB::table('medicine_transaction')->insert([
            'medicine_id' => 1,
            'transaction_id' => 10,
            'quantity' => 2,
            'subtotal' => 20000
        ]);

        DB::table('medicine_transaction')->insert([
            'medicine_id' => 10,
            'transaction_id' => 10,
            'quantity' => 4,
            'subtotal' => 66000
        ]);
    }
}
