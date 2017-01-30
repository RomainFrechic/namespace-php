<?php
require "vendor/autoload.php";
use RomainFrechic\App\Bar\Client as bar;
use RomainFrechic\App\Foo\Client as foo;
echo(new bar())->render();
echo(new foo())->render();

