<?php

namespace App\Http\Controllers;

use App\Models\Urusan;
use GuzzleHttp\Client;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class UrusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

      
       $data = Urusan::getAll();
       $tes = $this->paginate($data);
       $tes->withPath('/urusan');
       $client = new Client();
       
    //    dd($nama);   
        return view('urusan', ['data' => $tes,'client' => $client]);
    }
    public function paginate($items, $perPage = 8, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }

    /**getNamaByid
     * Show the form for creating a new resource.
     */
    public function displayName(string $id)
    {
        $nama = Urusan:: getNamaByid($id);
        return $nama;
    }
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
        //
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
