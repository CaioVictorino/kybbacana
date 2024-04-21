<?php

spl_autoload_register(function ($class) {
    include lcfirst($class . '.php');
});