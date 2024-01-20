<?php 
namespace App\Services;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryService{

    public function GetById($id){
      
    }

    public function GetPagination(){

    }

    public function store($requst){
        $data = $requst->all();
        $data['slug_ar']= Str::slug($requst->title_ar);
        $data['slug_en']= Str::slug($requst->title_en);
        $category =Category::Craete($data);
        return true;

    }

    public function update(){


    }
    public function delete(){

    }
}