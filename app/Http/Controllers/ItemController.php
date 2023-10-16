<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//CRUD(Create, Read, Update, Delete)

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //TODO: データベースから取得
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
