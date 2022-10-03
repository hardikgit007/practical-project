<?php

use App\Terms;
use Illuminate\Database\Seeder;

class TermTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $terms = [
            ['id' => 1, 'name' => 'Term 1'],
            ['id' => 2, 'name' => 'Term 2'],
            ['id' => 3, 'name' => 'Term 2'],
            ['id' => 4, 'name' => 'Term 4'],
            ['id' => 5, 'name' => 'Term 5'],
        ];
        Terms::insert($terms);
    }
}
