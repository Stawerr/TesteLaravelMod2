<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(['name' => 'Quarto','created_at'=>now(),'updated_at'=>now()]);
        DB::table('categories')->insert(['name' => 'Sala','created_at'=>now(),'updated_at'=>now()]);
        DB::table('categories')->insert(['name' => 'Cozinha','created_at'=>now(),'updated_at'=>now()]);
        DB::table('categories')->insert(['name' => 'Casa de Banho','created_at'=>now(),'updated_at'=>now()]);
    }
}
