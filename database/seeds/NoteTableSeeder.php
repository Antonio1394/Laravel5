<?php

use App\Note;
use Illuminate\Database\Seeder;

class NoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	for ($i=1; $i<=100; $i++) {   
    	 	Note::create(['note' => "Note $i"]);
       		# code...
    	}
        
    }
}
