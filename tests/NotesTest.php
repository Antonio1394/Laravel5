<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Note;

class NotesTest extends TestCase
{
    use WithoutMiddleware;

   
    public function test_notes_list()
    {
    	//having
    	Note::create(['note' => 'My first note']);
    	Note::create(['note' => 'second note']);

    	//When
        $this->visit('notes')
        	//Then
        	->see('My first note')
        	->see('second note');
    }

    public function test_create_note()
    {
        $this->visit('notes')
            ->click('Add a note')
            ->seePageIs('notes/create')
            ->see('Create a note')
            ->type('A new note','note')
            ->press('Create note')
            ->seePageIs('notes')
            ->see('A new note')
            ->seeIndDatabase('notes',[
                    'note'=>'A new note'
                ]);
    }
}
