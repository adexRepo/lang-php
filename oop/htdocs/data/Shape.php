<?php

namespace Data;

class Shape
{
    function getMiddle():int
    {
        return 0;
    }
}


class Rectangle extends Shape
{
    function getMiddle():int
    {
        return 5;
    }

    function getParentMiddle():int
    {
        return parent::getMiddle();
    }
}