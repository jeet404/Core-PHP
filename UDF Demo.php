<?php

#No Arguments ,No Return
function writeMsg()
{
    echo "Hello World";
}

#Arguments ,No Return
function familyName($fname)
{
    echo $fname;
}

#Arguments with Return
function addNumbers($a,$b)
{
    return $a + $b;
}

#NO Arguments with Return
function saySomthing()
{
    return "Somthing";
}

writeMsg();
familyName("<br> KSC");
echo ("<br>" . saySomthing());
echo ("<br>" . addNumbers(10,20));

?>