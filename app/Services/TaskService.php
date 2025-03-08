<?php

namespace App\Services;

class TaskService
{
    protected $tasks;

    public function add($name)
    {
        $this->tasks[] = $name;
    }

    public function getallTasks()
    {
        return $this->tasks;
    }
}