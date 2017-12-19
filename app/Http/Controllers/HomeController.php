<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    /**
     * [index homepage]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function index(Request $request)
    {
    	try {
    		return view('index');
    	} catch (Exception $e) {
    		
    	}
    }

    public function getItems(Request $request)
    {
    	try {
    		// Create a client with a base URI
			$client = new Client(['base_uri' => 'http://jsonblob.com/api/']);
			$response = $client->request('GET', 'jsonBlob/b235e32f-8250-11e7-8e2e-893ffec7f2e1');  
			$items = json_decode($response->getBody());
            $menu_items = $items->menu->menu_items;
			return view('items',compact('menu_items'));  		
    	} catch (Exception $e) {
    		
    	}
    }

    public function filterItems(Request $request)
    {
        try {
            // Create a client with a base URI
            $client = new Client(['base_uri' => 'http://jsonblob.com/api/']);
            $response = $client->request('GET', 'jsonBlob/b235e32f-8250-11e7-8e2e-893ffec7f2e1');
            $items = json_decode($response->getBody());
            $menu_items = collect($items->menu->menu_items);
            if($request->input('category_ids')){
                $category_ids = $request->input('category_ids');
                $filtered_items = $menu_items->filter(function ($item, $key) use ($category_ids) {
                return in_array($item->category_id,$category_ids);
            });
            $menu_items = $filtered_items;
            }
            return view('items',compact('menu_items')); 
        } catch (Exception $e) {
            
        }
    }
}
