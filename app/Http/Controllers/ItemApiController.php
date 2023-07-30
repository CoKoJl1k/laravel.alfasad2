<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemApiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'status' => 'success',
            'errors ' => array('index ')
        ]);
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
        $item = new Item();
        $item->uuid = $arrItem['uuid'];
        $item->name = $arrItem['name'];
        $item->amount = $arrItem['amount'];;
        $item->price = $arrItem['price'];
        $item->save();

        $items = Item::all();

        return response()->json([
            'status' => 'success',
            'items' => $items,
        ]);
    }

}
