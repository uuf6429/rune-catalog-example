<?php

namespace uuf6429\RuneCatalogExample\Action;

use uuf6429\Rune\Action\ActionInterface;
use uuf6429\Rune\Context\ContextInterface;
use uuf6429\Rune\Rule\RuleInterface;
use uuf6429\Rune\Util\EvaluatorInterface;

class PrintAction implements ActionInterface
{
    /**
     * @param EvaluatorInterface $eval
     * @param ContextInterface $context
     * @param RuleInterface $rule
     */
    public function execute($eval, $context, $rule): void
    {
        printf(
            'Rule %s (%s) triggered for %s.' . PHP_EOL,
            $rule->getId(),
            $rule->getName(),
            (string) $context
        );
    }
}
