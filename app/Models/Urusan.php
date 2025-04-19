<?php

namespace App\Models;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Urusan extends Model
{
    public static function getAll()
    {
        $urusan = new Client();
        $url = "https://satudataalor.id/api/3/action/group_list";
        $response = $urusan->request('GET', $url);
       $content =  $response->getBody()->getContents();
       $contentArray = json_decode($content, true);
       $data = $contentArray['result'];
       return $data;
    }
    public static function getNamaByid($id)
    {
       $urusan = new Client();
       $url = "https://satudataalor.id/api/3/action/group_show?id=$id";
        $response = $urusan->request('GET', $url);
       $content =  $response->getBody();
       $contentArray = json_decode($content, true);
       $nama = $contentArray['result']['displau_name'];
       return $nama;

       //  https://satudataalor.id/api/3/action/group_show?id=kesehatan
    //    $data = Http::get('https://api.npoint.io/99c279bb173a6e28359c/surat/33');
    //    $data_with_paginate = $this->paginate($data->json());
    //    $data_with_paginate->withPath('show_api');
    }
}
