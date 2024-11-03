<?php

namespace TGN\HelloWorldBundle;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class HelloWorldBundle extends AbstractBundle implements ConfigurationInterface
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }

    /**
     * Définition de la configuration par défaut du bundle.
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('hello_world');

        $treeBuilder->getRootNode()
            ->children()
            ->scalarNode('greeting_message')
            ->defaultValue('Hello, world!')
            ->info('Custom greeting message for HelloWorldBundle.')
            ->end()
            ->end();

        return $treeBuilder;
    }

    /**
     * Charger les configurations utilisateur dans le conteneur.
     */
    protected function configureContainer(ContainerBuilder $container, LoaderInterface $loader): void
    {

        // Charger les services du bundle
        $container->import($this->getPath().'/config/services.yaml');
    }


}