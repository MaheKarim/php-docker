<?php

    function autoload($name)
    {
        include strtolower("{$name}.php");
    }

    spl_autoload_register('autoload');

    (new Earth)->getEarthName();
    (new Planet)->getPlanetName();