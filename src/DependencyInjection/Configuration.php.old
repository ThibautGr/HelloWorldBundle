<?php

namespace TGN\HelloWorldBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('hello_world');

        $treeBuilder->getRootNode()
            ->children()
            ->scalarNode('greeting_message')
            ->defaultValue('Hello, world!')
            ->info('Custom greeting message')
            ->end()
            ->end();

        return $treeBuilder;
    }
}