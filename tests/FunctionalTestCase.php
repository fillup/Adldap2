<?php

namespace adLDAP\Tests;

use Mockery;

class FunctionalTestCase extends \PHPUnit_Framework_TestCase
{
    protected function mock($class)
    {
        return Mockery::mock($class);
    }
}