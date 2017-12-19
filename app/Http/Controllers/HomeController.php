<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    /**
     * [index homepage]
     *
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
            $items = $this->getMenuItems();
            $menu_items = $items->menu->menu_items;
            return view('items', compact('menu_items'));          
        } catch (Exception $e) {
            
        }
    }

    public function getMenuItems()
    {
        try {
            // Create a client with a base URI
            $client = new Client(['base_uri' => 'http://jsonblob.com/api/']);
            $response = $client->request('GET', 'jsonBlob/b235e32f-8250-11e7-8e2e-893ffec7f2e1');
            $items = json_decode($response->getBody());
            return $items;
        } catch (Exception $e) {
            
        }
    }

    public function filterItems(Request $request)
    {
        try {
            
            $items = $this->getMenuItems();
            $menu_items = collect($items->menu->menu_items);
            if($request->input('category_ids')) {
                $category_ids = $request->input('category_ids');
            } else {
                $category_ids = array();
            }
            if($request->input('food_type')) {
                $food_type = $request->input('food_type');
            } else {
                $food_type = array();
            }
            $filtered_items = $menu_items->filter(
                function ($item, $key) use ($category_ids,$food_type) {
                    if($category_ids && !$food_type) {
                        return in_array($item->category_id, $category_ids);
                    } elseif(!$category_ids && $food_type) {
                        if(sizeof($food_type) == 2) {
                            return $item;
                        } elseif(sizeof($food_type) == 1 && $food_type[0]==1) {
                            return $item->is_veg;
                        } elseif (sizeof($food_type) == 1 && $food_type[0]==2) {
                            return !$item->is_veg;
                        }
                    }
                    elseif($category_ids && $food_type) {
                        if(sizeof($food_type) == 2) {
                            return in_array($item->category_id, $category_ids);
                        } elseif(sizeof($food_type) == 1 && $food_type[0]==1) {
                            return in_array($item->category_id, $category_ids) && $item->is_veg;
                        } elseif (sizeof($food_type) == 1 && $food_type[0]==2) {
                            return in_array($item->category_id, $category_ids) && !$item->is_veg;
                        }
                    }
                    elseif(!$category_ids && !$food_type) {
                            return $item;
                    }
                }
            );
            $menu_items = $filtered_items;
            return view('items', compact('menu_items')); 
        } catch (Exception $e) {
            
        }
    }
}
