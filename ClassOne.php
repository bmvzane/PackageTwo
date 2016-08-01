<?php

namespace TestRepository\PackageTwo;

class ClassOne
{

    public function __construct()
    {
    
    }
    
    public function methodOne()
    {
        printf('%s has been called!', __METHOD__);
    }

}
