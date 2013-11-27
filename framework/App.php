<?php

class App
{

    protected static $javascripts;

    public function run()
    {
        header("Content-Type: text/html; charset=utf-8");
        $dispatcher = new Dispatcher();
        $dispatcher->run();
    }

    public static function mongo()
    {
        try {
            $connection = new Mongo();
        } catch (MongoConnectionException $e) {
            die('Could not connect. Check to make sure MongoDB is running.');
        }
        return $connection;
    }

    public static function addJavascript($src)
    {
        self::$javascripts[md5($src)] = $src;
    }

    public static function getJavascripts()
    {
        if (count(self::$javascripts)) {
            foreach (self::$javascripts as $src) {
                echo "<script type='text/javascript' src='$src'></script>";
            }
        }
    }

}