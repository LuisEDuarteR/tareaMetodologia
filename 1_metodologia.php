<?php
echo "proyecto de meotdologia\n";

class A
{
private $:foobar;
function __construct($foobar)
{

31

$this->nombre = $foobar;
}
function __toString()
{
return sprintf ("Hola, %s.\n", $this->foobar);
}
}Añado la clase al archivo que estamnso traba

