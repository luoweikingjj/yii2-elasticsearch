<?php

namespace app\controllers;

use app\models\PostSearch;
use yii\web\Controller;

class PostController extends Controller
{
    public function actionIndex()
    {
        $keyword = 'php';
        $posts = PostSearch::find()
            ->query([
                'multi_match' => [
                    'query' => $keyword,
                    'fields' => ['title', 'body'],
                ]
            ])->highlight([
                'pre_tags' => ["<b>"],
                'post_tags' => ["</b>"],
                'fields' => [
                    'title' => new \stdClass(),
                    'body' => new \stdClass(),
                ]
            ])->all();

        foreach ($posts as $post) {
            $title = $post->highlight['title'][0] ?? $post->title;
            $body = $post->highlight['body'][0] ?? $post->body;

            echo $title, $body, '<hr>';
        }
    }
}
