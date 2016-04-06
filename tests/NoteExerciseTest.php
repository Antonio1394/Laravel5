<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class NoteExerciseTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_note_summary_and_notes_details()
    {
    	$text='Begin of the note. Ullam in expedita corporis voluptatum ea nesciunt numquam. Et et aut aut nisi sed dolores iure officiis. Provident hic dolorem harum et. Itaque ut minima et eum aut voluptatem consectetur. Rerum sed et incidunt consequatur';
    	$text.='End of the note';

    	$note=\App\Note::create(['note' => $text]);
        $this->visit('notes')
        	->see('Begin of the note')
        	->seeInElement('.label','Others')
        	->dontSee('End of the note')
        	->seeLink('view note')
        	->click('View note')
        	->see($text);
    }
}
