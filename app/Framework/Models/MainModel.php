<?php 

    namespace SimpleWork\Framework\Models;

    use SimpleWork\Framework\Database\Db;

    class MainModel extends Db
    {

        private static $model_name;

        public static function table($model_name)
        {
            self::$model_name = $model_name;
            return self::$model_name;
        }

    }