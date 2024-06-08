<?php

namespace controllers;
// require __DIR__ . '/../services/HomeService.php';

class TareaController
{
    private \core\Mysql $mysql;
    public function __construct(\core\Mysql $mysql){
        $this->mysql = $mysql;
    }

    public function index($request, $args)
    {
        // $data = (new \services\ActivitiesService($this->mysql))->index($request, $args);
        require __DIR__ . '/../views/tarea/index.php';
    }
}