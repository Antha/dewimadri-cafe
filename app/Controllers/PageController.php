<?php namespace App\Controllers;
use App\Models\PageModel;
use App\Models\PageBlockModel;

class PageController extends BaseController {
    public function index($slug) {
        $pageModel = new PageModel();
        $blockModel = new PageBlockModel();

        $page = $pageModel->where('slug',$slug)->first();
        $blocks = $blockModel->where('page_id',$page['id'])
                             ->orderBy('order_index','ASC')->findAll();

        return view('page_view', ['page'=>$page,'blocks'=>$blocks]);
    }

    public function editor($slug) {
        $pageModel = new PageModel();
        $blockModel = new PageBlockModel();

        $page = $pageModel->where('slug',$slug)->first();
        $blocks = $blockModel->where('page_id',$page['id'])
                            ->orderBy('order_index','ASC')->findAll();

        return view('editor', ['page'=>$page,'blocks'=>$blocks]);
    }


    public function saveBlocks() {
        $blockModel = new PageBlockModel();
        $data = $this->request->getJSON(true);

        foreach($data as $i=>$block){
            $blockModel->update($block['id'], [
                'order_index'=>$i,
                'type'=>$block['type'],
                'content'=>json_encode($block['content']), // encode sekali
                'settings'=>json_encode($block['settings'] ?? [])
            ]);
        }
        return $this->response->setJSON(['status'=>'ok']);
    }

}
