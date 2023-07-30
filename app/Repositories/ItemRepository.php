<?php

namespace App\Repositories;
use App\Models\Item;
use App\Repositories\Interfaces\ItemRepositoryInterface;

class ItemRepository implements ItemRepositoryInterface
{
    public function all()
    {
        return Item::all();
    }

    public function getById($id)
    {
        return Item::find($id);
    }

    public function getByName(string $name)
    {
        return Item::where('name', $name)->get();
    }

    public function create(array $url)
    {
        return  Item::create($url);
    }
}
