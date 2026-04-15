<?php 

namespace App\Models;
use CodeIgniter\Model;

class PageBlockModel extends Model {
    protected $table = 'page_blocks';
    protected $allowedFields = ['page_id','type','content','order_index'];
}

?>