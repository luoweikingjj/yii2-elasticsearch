<?php

namespace app\commands;

use app\models\Post;
use yii\console\Controller;
use yii\console\ExitCode;

class PostController extends Controller
{
    public function actionIndex()
    {
        $posts = [
            ['title' => 'php 1', 'body' => 'php 111'],
            ['title' => 'php 2', 'body' =>  'php 222'],
            ['title' => 'php 3', 'body' =>  'php 333'],
            ['title' => 'java 1', 'body' =>  'java 111'],
            ['title' => 'java 2', 'body' =>  'java 222'],
            ['title' => 'java 3', 'body' =>  'java 333'],
        ];
        foreach ($posts as $post) {
            $postModel = new Post($post);
            $postModel->save();
        }

        return ExitCode::OK;
    }
}
