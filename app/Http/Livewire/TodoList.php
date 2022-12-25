<?php

namespace App\Http\Livewire;

use App\Models\TodoItem;
use Livewire\Component;

class TodoList extends Component
{

    public string $todoText = '';
    public $allTodos = [];


    public function render()
    {
       $this->getTodos();
       
        return view('livewire.todo-list');
    }

    public function addTodo()
    {
        $todo = new TodoItem();

        $todo['todo'] = $this->todoText;
        $todo->save();

        $this->todoText = '';

        $this->getTodos();
    }

    public function getTodos()
    {
        $this->allTodos = TodoItem::orderBy('created_at', 'DESC')->get();
    }

    public function toggleTodo(int $id)
    {
        $todo = TodoItem::where('id', $id)->first();

        if(! $todo) {
            return;
        }
        
        $todo['completed'] = !$todo['completed'];
        
        $todo->save();

        $this->getTodos();
    }

    public function deleteTodo(int $id)
    {
        $todo = TodoItem::where('id', $id)->first();

        if(! $todo) {
            return;
        }

        $todo->delete();

        $this->getTodos();
    }
}
