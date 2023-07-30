<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Repositories\Interfaces\itemRepositoryInterface;
use App\Services\itemService;
use Illuminate\Http\Request;

class ItemApiController extends Controller
{

    public ItemRepositoryInterface $itemRepository;
    public ItemService $itemService;

    public function __construct(ItemService $itemService, ItemRepositoryInterface $itemRepository)
    {
        $this->itemRepository = $itemRepository;
        $this->itemService = $itemService;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bodyContent = $request->getContent();
        $xml = simplexml_load_string($bodyContent);
        $jsonItem = json_encode($xml);
        $arrItem = json_decode($jsonItem, 1);

        $item = [
            'uuid' =>  $arrItem['uuid'],
            'name' =>  $arrItem['name'],
            'amount' =>  $arrItem['amount'],
            'price' =>  $arrItem['price']
        ];
        $errors = $this->itemService->validate($item);

        if(!empty($errors['message'])) {
            return response()->json([
                'status' => 'fail',
                'msg' =>  $errors['message']
            ]);
        }
        $this->itemRepository->create($item);
        $items = $this->itemRepository->all();

        return response()->json([
            'status' => 'success',
            'msg' =>  'Данные успешно сохранены.',
            'items' => $items
        ]);
    }
}
