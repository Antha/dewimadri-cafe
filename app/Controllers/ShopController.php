<?php namespace App\Controllers;
use App\Models\PageModel;
use App\Models\PageBlockModel;

class ShopController extends BaseController {
    public function index() {
        return view('shop_view');
    }

}
