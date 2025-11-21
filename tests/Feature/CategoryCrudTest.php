<?php
namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Category;

class CategoryCrudTest extends TestCase {
    use RefreshDatabase;

    public function test_crud(){
        $this->post('/categories',['nome'=>'Teste']);
        $this->assertDatabaseHas('categories',['nome'=>'Teste']);
    }
}
