<?php

namespace App\Router;


class UrlGenerator extends \Symfony\Component\Routing\Generator\UrlGenerator
{
    protected function doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, array $requiredSchemes = array())
    {
        $r = parent::doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
        return $r . 'test';
    }
}