<?php

namespace Druid628\ExactTarget\ExactTargetBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('exact_target');

         $rootNode
            ->children()
              ->arrayNode('credentials')
                ->children()
                  ->scalarNode('username')
                      ->isRequired()
                      ->cannotBeEmpty()
                      ->end()
                  ->scalarNode('password')
                      ->isRequired()
                      ->cannotBeEmpty()
                      ->end()
                  ->scalarNode('server')
                      ->isRequired()
                      ->cannotBeEmpty()
                      ->end()
                ->end()
              ->end()
            ->end();

        return $treeBuilder;
    }
}
