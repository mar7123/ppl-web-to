<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Throwable;

class ArticleController extends Controller
{
    public function getArticles(Request $request): Response
    {
        try {
            $result = Article::orderBy('published_at', 'desc')->simplePaginate(3);
            return Response([
                'status' => true,
                'data' => $result,
            ], 200);
        } catch (Throwable $th) {
            return Response([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
    public function getArticleById(Request $request, string $id): Response
    {
        try {
            $result = Article::where('article_id', $id)->first();
            return Response([
                'status' => true,
                'data' => $result,
            ], 200);
        } catch (Throwable $th) {
            return Response([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
}
