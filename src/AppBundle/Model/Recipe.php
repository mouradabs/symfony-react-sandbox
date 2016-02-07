<?php

namespace AppBundle\Model;

class Recipe
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $slug;

    /**
     * @var array
     */
    public $tags = array();
}
