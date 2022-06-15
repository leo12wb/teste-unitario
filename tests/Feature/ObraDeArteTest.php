<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

use App\Models\User;

class ObraDeArteTest extends TestCase
{
    
    /**
     * Registrar obras de artes.
     *
     * @return void
    */
    
    public function test_register_obra_arte()
    {
        $response = $this->postJson('/api/arte', [
            'nome' => 'Mona Lisa',
            'artista' => 'Leonardo da Vinci',
            'tipo' => 'Pintura',
            'criacão' => 1503,
            'localizada' => 'Museu do Louvre',
        ]);
    
        $response
                ->assertStatus(201)
                ->assertJson([
                    'created' => true,
                ]);
    }        
}
