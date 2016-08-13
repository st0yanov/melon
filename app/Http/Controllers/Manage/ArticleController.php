<?php

namespace Melon\Http\Controllers\Manage;

use Illuminate\Http\Request;
use Melon\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->setupPermissions();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manage.article.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function setupPermissions()
    {
        $this->middleware('permission:article.show|article.manage', ['only' => ['index', 'show']]);
        $this->middleware('permission:article.create|article.manage', ['only' => ['create', 'store']]);
        $this->middleware('permission:article.edit|article.manage', ['only' => ['edit', 'update']]);
        $this->middleware('permission:article.delete|article.manage', ['only' => ['destroy']]);
    }
}
