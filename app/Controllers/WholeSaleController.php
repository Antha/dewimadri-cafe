<?php namespace App\Controllers;
use App\Models\PageModel;
use App\Models\PageBlockModel;

class WholeSaleController extends BaseController {
    public function index() {
        return view('wholesale_view');
    }
}
