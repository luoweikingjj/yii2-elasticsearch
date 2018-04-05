<?php

namespace app\models;

use Yii;
use yii\elasticsearch\ActiveRecord;

class PostSearch extends ActiveRecord
{
    public static function index()
    {
        return 'blog';
    }

    public static function type()
    {
        return 'posts';
    }

    public function attributes()
    {
        return ['id', 'title', 'body'];
    }
}
