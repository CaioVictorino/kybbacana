<?php 

namespace Routes;

use Routes\RouteList;
     

     class Router{
          public function requester($uri)
          {
               $consult = new routeList();
               $consulter = $consult->pathFinder($uri);
               if(count(array($consulter)) <= 0){
                    return;
                    die;
               }

               return $consulter;
          }
     }

