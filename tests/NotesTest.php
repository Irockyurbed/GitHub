<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Note;

class NotesTest extends TestCase
{

    //Lo que hara que todas las pruebas se ejecuten dentro de una transaccion
    use DatabaseTransactions;

	//Darle un nombre para definir una prueba
    public function test_notes_list()
    {
    	//Having
    	Note::create(['note' => 'My first note']);
    	Note::create(['note' => 'second note']);

    	//When
        $this->visit('notes')
        	//Then
        	->see('My first note')
        	->see('second note');
    }

    public function test_create_note(){
     
        $this->visit('notes')
        ->click('Add a note')
        ->seePageIs('notes/create')
        ->see('Create a note') //titulo
        ->type('A new a note','note')//tipo
        ->press('Create note')
        ->seePageIs('notes')
        ->see('A new note')
        ->seeInDatabase('notes', [
            'note' => 'A new note'
            ]);


    }
}
