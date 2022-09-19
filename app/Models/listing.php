<?php
namespace App\Models;

class Listing{
    public static function all(){
        return [
            [
                'id' => 1,
                'title' => 'laravel',
                'description' => 'Here is where you can register web routes for your application. These 33
                routes are loaded by the RouteServiceProvider within a group which
                contains the "web" middleware group. Now create something great!'
            ],
            [
                'id' => 2,
                'title' => 'php',
                'description' => 'Here is where you can register web routes for your application. These 33
                routes are loaded by the RouteServiceProvider within a group which
                contains the "web" middleware group. Now create something great!'
            ]
            ];
    }

    public static function find($id){
        $listings = self::all();

        foreach ($listings as $listing) {
            if($listing['id'] == $id ){
                return $listing;
            }
        }
    }
}
