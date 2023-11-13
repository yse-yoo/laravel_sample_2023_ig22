<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

//CRUD(Create, Read, Update, Delete)

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::get();
        $data = ['items' => $items];
        return view('item.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('item.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $posts = $request->input();
        // INSERT INTO items (name, price) VALUE (xxxx, xxxx);
        Item::create($posts);

        // item/ にリダイレクト
        return redirect(route('item.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        //TODO: MySQLデータベースから取得
        //商品データ(Test Data)
        $items = [
            1 => "コーヒー",
            2 => "紅茶",
            3 => "ほうじ茶",
        ];

        $item = "";
        if ($id > 0 && in_array($id, array_Keys($items))) {
            $item = $items[$id];
        }

        // Viewに受け渡すデータを作成
        $data = [
            'id' => $id,
            'item' => $item,
        ];

        // resouces/views/item/show.blade.php
        // データ受け渡し
        return view('item.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
