<?php

namespace Tests\Feature\Api\v1;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Event\Test\FailedSubscriber;
use Tests\TestCase;

class TaskTest extends TestCase
{
    use RefreshDatabase;
    public function test_task_index(): void
    {
        //Arrange
        $tasks = \App\Models\Task::factory()->count(2)->create();
        //Act
        $response = $this->get('/api/v1/tasks');
        //Assert
        $response->assertStatus(200);
        $response->assertJsonCount(2, 'data');

        $response->assertJsonStructure([
            'data' => [
                '*' => [
                    'kode',
                    'nama',
                    'selesai',
                   // 'created_at',
                   // 'updated_at',
                 ],
            ],
        ]);
    
    }
    public function test_simpan_task(): void
    {
    //arrange

    //act(arrange dan act digabungkan dalam sekali jalan)
    $response = $this->postJson('/api/v1/tasks', [
        'name' => 'Test Task',
        'is_completed' => false,
    ]);
    //assert
    $response->assertCreated();
    $response->assertJsonStructure([
        'data' => [
            'kode',
            'nama',
            'selesai',
        ],
    ]);
    $this->assertDatabaseHas('tasks', [
        'name' => 'Test Task',
        'is_completed' => false, // Default value for is_completed
    ]);
    }
    public function test_ubah_task(): void
    {
        //arrange
        $task = \App\Models\Task::factory()->create();
        //act
        $response = $this->putJson("/api/v1/tasks/{$task->id}", [
            'name' => 'Updated Task',
            'is_completed' => true,
        ]);
        //assert
        $response->assertOk();
        $response->assertJsonStructure([
            'data' => [
                'kode',
                'nama',
                'selesai',
            ],
        ]);
        $response->assertJsonFragment([
            'kode' => $task->id,
            'nama' => 'Updated Task',
            'selesai' => true,
        ]);
        $this->assertDatabaseHas('tasks', [
            'id' => $task->id,
            'name' => 'Updated Task',
            'is_completed' => true,
        ]);
    }
    public function test_hapus_task(): void
    {
        //arrange
        $task = \App\Models\Task::factory()->create();
        //act
        $response = $this->deleteJson('/api/v1/tasks/' . $task->id);
        //assert
        $response->assertNoContent();

        $this->assertDatabaseMissing('tasks', [
            'id' => $task->id,
        ]);
    }
}