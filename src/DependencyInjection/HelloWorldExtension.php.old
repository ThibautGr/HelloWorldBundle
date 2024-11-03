<?php

namespace TGN\HelloWorldBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\ConfigurableExtension;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class HelloWorldExtension extends ConfigurableExtension
{
    protected function loadInternal(array $mergedConfig, ContainerBuilder $container): void
    {
        // Enregistrer le paramètre dans le conteneur en utilisant la configuration fusionnée
        $container->setParameter('hello_world.greeting_message', $mergedConfig['greeting_message']);

        // Charger les services internes du bundle
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../config'));
        $loader->load('services.yaml');
    }

    public function getConfiguration(array $config, ContainerBuilder $container): ConfigurationInterface
    {
        return new class implements ConfigurationInterface {
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
        };
    }
}