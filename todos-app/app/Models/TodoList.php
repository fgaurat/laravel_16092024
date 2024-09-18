<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Todo> $completedTodos
 * @property-read int|null $completed_todos_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Todo> $todos
 * @property-read int|null $todos_count
 * @method static \Database\Factories\TodoListFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|TodoList newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TodoList newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TodoList query()
 * @method static \Illuminate\Database\Eloquent\Builder|TodoList whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TodoList whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TodoList whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TodoList whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class TodoList extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    public function todos(){
        return $this->hasMany(Todo::class);
    }

    public function completedTodos(){
        return $this->hasMany(Todo::class)->where('completed',true);
    }

}
