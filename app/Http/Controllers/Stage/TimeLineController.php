<?php
/**
 * Created by PhpStorm.
 * User: xizy_
 * Date: 2017/4/20
 * Time: 20:27
 */
namespace App\Http\Controllers\Stage;


use App\Article;
use App\Category;

class TimeLineController extends BaseController
{


    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->paginate(6);
        foreach ($articles as $article) {

            $article['tags'] = explode('-', $article->tag);
        }

        $cates = Category::all();
        return view('stage.article.index', compact('articles','cates'));
    }


    public function show($id)
    {
        $article = Article::find($id);
        $article->view_count++;
        $article->update();
        return view('stage.article.show', compact('article'));
    }
}