<?php

/**
 * Mongo Contact DB
 * 
 * Created by Haszpra Oliver, Haszprus
 * 
 * Simple concept demonstration for using mongodb to store contact data with custom fields, 
 * which can be modified any time almost without using any resources, locks etc.
 * 
 * The goal was not to provide a full solution, but only a basic concept, and to demonstrate how lightweight
 * the model can be by using mongodb.
 * The controllers are lightweight too.
 * Look closely at the models, the base models, the controllers, and the base list controller. 
 * None of them implement any heavy logic, but still, the user gets a nice amount of functionality.
 * 
 * Created in 2012
 * 
 * By Haszpra Olivér, Haszprus
 * http://blog.haszprus.hu
 * haszprus@gmail.com
 * 
 */

require_once '../framework/ClassAutoloader.php';
$app = new App();
$app->run();