<?php

namespace App\Http\Controllers\Blog;

use App\Category;
use App\Http\Requests\AddCate;
use Illuminate\Http\Request;

class CategoryController extends BaseController
{
    public function addpage()
    {
        $cates=Category::all();
        return view('admin.category',compact('cates'));
    }

    public function add(AddCate $request)
    {

        $cates= Category::all();
        foreach ($cates as $cate){
            if ($cate->description === $request->get('description')){
                \Session::flash('msg','标签已经存在');
                return;
            }else{
                if (Category::create($request->all())){
                    \Session::flash('msg','添加标签成功');
                    return;
                }else{
                    \Session::flash('msg','添加标签失败');
                    return;
                }

            }

        }

    }
}
