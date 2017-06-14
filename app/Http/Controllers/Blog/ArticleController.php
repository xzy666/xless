<?php

namespace App\Http\Controllers\Blog;

use App\Article;
use App\Category;
use App\Http\Requests\AddArticle;
use App\Http\Requests\EditeArticle;
use Illuminate\Http\Request;

class ArticleController extends BaseController
{

    public function addpage()
    {
        $cates=Category::all();
        return view('admin.add',compact('cates'));
    }

    public function add(AddArticle $request)
    {
        $request['tag']=implode('-',$request->get('tags'));
        if (Article::create($request->all())){
            \Session::flash('msg','添加成功');
            return redirect()->to('article/addpage');
        }else{
            \Session::flash('msg','添加失败');
            return back()->withInput($request->all());
        }

    }

    public function lists()
    {
        $articles = Article::orderBy('created_at','desc')->paginate(10);
        $cates=Category::all();
        return view('admin.list', compact('articles','cates'));
    }

    public function editePage($id)
    {
        $article=Article::find($id);
        $cates=Category::all();
        $tags=explode('-',$article->tag);
        return view('admin.edite',compact('article','cates','tags'));
    }

    public function edite(EditeArticle $request)
    {
        $article=Article::find($request->get('id'));
        $request['tag']=implode('-',$request->get('tag'));
        if($article->update($request->all())) {
            \Session::flash('msg' , '修改成功');
            return redirect()->to('admin/list');
        }else{
            return back()->withInput();
        }
    }

    public function delete($id)
    {
        Article::find($id)->delete();
        \Session::flash('msg','删除成功');
        return redirect()->to('admin/list');
    }

    public function search(Request $request)
    {
        $keywords=$request->get('keywords');
        if ($keywords==null){
            return redirect()->to('admin/list');
        }
        $articles=Article::all();
        $this->searchContent($articles,$keywords);
        $cates=Category::all();
        return view('admin.search',compact('cates','articles'));
    }

    private function searchContent($articles,$keywords)
    {
        foreach ($articles as $article){
            if (strstr($article->content,$keywords)||strstr($article->title,$keywords)||strstr($article->description,$keywords)){
                $article->flag='1';
            }
        }
    }

}
