<?php namespace App\Controllers;
use App\Models\PageModel;
use App\Models\PageBlockModel;

class ContactController extends BaseController {
    public function index() {
        return view('contact_view');
    }
}
