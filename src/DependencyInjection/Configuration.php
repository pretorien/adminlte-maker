<?php

namespace Pretorien\AdminLTEMakerBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('adminlte-maker');
        $rootNode = $treeBuilder->getRootNode();
        
        $rootNode
        ->children()
            ->scalarNode('base_layout')
                ->defaultValue("@AdminLTE/layout/default-layout.html.twig")
            ->end()
            ->scalarNode('skeleton_dir')
                ->defaultValue(__DIR__ . "/../Resources/skeleton/")
            ->end()
            ->arrayNode('datatable')
            ->addDefaultsIfNotSet()
                ->children()
                    ->scalarNode('cdn_css')
                        ->defaultValue("https://cdn.datatables.net/v/dt/jq-3.2.1/dt-1.10.16/datatables.min.css")
                    ->end()
                    ->scalarNode('cdn_js')
                        ->defaultValue("https://cdn.datatables.net/v/dt/jq-3.2.1/dt-1.10.16/datatables.min.js")
                    ->end()
                ->end()
            ->end()
        ->end();
        return $treeBuilder;
    }
}
