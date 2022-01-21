<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facedes\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Product::factory(10)->create();
    }
        
    //     DB::table('options')->insert([
    //         'ID'=>'INT',
    //         'Option name'=>'VARCHAR',
    //     ]);

    //     DB::table('orders')->insert([
    //         'ID'=>INT::,
    //         ' AMMOUNT'=>'VARCHAR',
    //         ' COSTUMER_ID'=>'VARCHAR',
    //         ' SHIPPING ADRESS'=>'VARCHAR',
    //         ' ORDER EMAIL'=>'VARCHAR',
    //         ' ORDER DATE'=>'TIMESTAMP',
    //         ' ORDER STATUS'=>'VARCHAR',
    //     ]);

    //     DB::table('categories')->insert([
    //         'ID'=>'INT',
    //         ' Name'=>'VARCHAR',
    //         ' Description'=>'VARCHAR',
    //         ' Thumbnail'=>'VARCHAR',
    // });
}
