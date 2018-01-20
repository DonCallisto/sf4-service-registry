<?php

declare(strict_types=1);

namespace App\DependencyInjection\Compiler;

use App\Formatter\Formatter;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class FormatterCompilerPass implements CompilerPassInterface
{
    const FORMATTERS_TAG = 'app.formatter.sport';

    /**
     * @param ContainerBuilder $container
     */
    public function process(ContainerBuilder $container): void
    {
        if (!$container->hasDefinition(Formatter::class)) {
            return;
        }

        $formatter = $container->getDefinition(Formatter::class);
        $formatters = $container->findTaggedServiceIds(self::FORMATTERS_TAG);
        foreach ($formatters as $id => $sportFormatter) {
            $formatter->addMethodCall('addFormatter', [new Reference($id)]);
        }
    }
}