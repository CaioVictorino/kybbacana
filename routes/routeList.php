<?php

namespace Routes;

/* CONTROLLERS LIST */
use controllers\homeController;



class RouteList{

     public function pathFinder($uri)
     {
          if(!isset($_SERVER['QUERY_STRING'])){
               $params = "";
          } else {
               $params = $_SERVER['QUERY_STRING'];
          }
          
   

          $cGet = count($_GET);

          if(!isset($_GET['id'])){
               $uid = null;
          }

          $routes = [
               "/" => [
                    "class" => homeController::class,
                    "method" => "index",
                    "access" => "public"
               ],
               "/barcos" => [
                    "class" => homeController::class,
                    "method" => "index",
                    "access" => "public"
               ],
               "/bugres" => [
                    "class" => homeController::class,
                    "method" => "index",
                    "access" => "public"
               ],
               "/quadriciclos" => [
                    "class" => homeController::class,
                    "method" => "index",
                    "access" => "public"
               ]

               
               
          ];

          if(!array_key_exists($uri, $routes))
          {
               http_response_code(404);
               die;
          }
     
          return $routes[$uri];
     }

}