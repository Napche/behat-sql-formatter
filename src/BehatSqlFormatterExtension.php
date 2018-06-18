<?php

namespace Napche\BehatSqlFormatter;


use Behat\Testwork\ServiceContainer\Extension as ExtensionInterface;
use Behat\Testwork\ServiceContainer\ExtensionManager;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;


class BehatSqlFormatterExtension implements ExtensionInterface
{
    public function getConfigKey()
    {
        return 'behat-sqlformatter';
    }

    public function initialize(ExtensionManager $extensionManager)
    {
        // TODO: Implement initialize() method.
    }

    public function configure(ArrayNodeDefinition $builder)
    {
        $builder->children()->scalarNode("db_host")->defaultValue("127.0.0.1");
        $builder->children()->scalarNode("db_port")->defaultValue("3306");
        $builder->children()->scalarNode("db_name")->defaultValue("behat");
        $builder->children()->scalarNode("db_user")->isRequired();
        $builder->children()->scalarNode("db_pass")->isRequired();
    }

    public function load(ContainerBuilder $container, array $config)
    {
        $definition = new Definition("emuse\\BehatHTMLFormatter\\Formatter\\BehatHTMLFormatter");
        dump($config);
//        foreach($config as $parameter) {
//
//        }
//        $definition->addArgument($config['name']);
//        $definition->addArgument($config['renderer']);
//        $definition->addArgument($config['file_name']);
//        $definition->addArgument($config['print_args']);
//        $definition->addArgument($config['print_outp']);
//        $definition->addArgument($config['loop_break']);
//
//        $definition->addArgument('%paths.base%');
//        $container->setDefinition("html.formatter", $definition)
//            ->addTag("output.formatter");

    }

}