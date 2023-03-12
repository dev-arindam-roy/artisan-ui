<?php

namespace CreativeSyntax\ArtisanUi\Traits;

trait Makeable {

    public function dynamicMackable()
    {
        $cmds = [
            'make:middleware',
            'make:event',
            'make:listener',
            'make:rule',
            'make:job',
            'make:mail',
            'make:seeder',
            'make:factory',
            'make:cast',
            'make:channel',
            'make:command',
            'make:component',
            'make:exception',
            'make:migration',
            'make:notification',
            'make:observer',
            'make:policy',
            'make:provider',
            'make:request',
            'make:resource',
            'make:test',
        ];
        return $cmds;
    }
}