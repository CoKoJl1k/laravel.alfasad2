<?php


namespace App\Repositories\Interfaces;


interface ItemRepositoryInterface
{
    public function all();
    public function getById($id);
}
