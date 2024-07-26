<?php

/*
 * Symfony DataTables Bundle
 * (c) Omines Internetbureau B.V. - https://omines.nl/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Omines\DataTablesBundle\Column;

use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * BoolColumn.
 *
 * @author Niels Keurentjes <niels.keurentjes@omines.com>
 */
class BoolColumn extends AbstractColumn
{
    public function normalize(mixed $value): string
    {
        if (null === $value) {
            return $this->getNullValue();
        }

        return ((bool) $value) ? $this->getTrueValue() : $this->getFalseValue();
    }

    protected function configureOptions(OptionsResolver $resolver): static
    {
        parent::configureOptions($resolver);

        $resolver
            ->setDefault(
                'rightExpr',
                function ($value) {
                    return trim(mb_strtolower($value)) === $this->getTrueValue();
                }
            );

        $resolver
            ->setDefault('trueValue', 'true')
            ->setDefault('falseValue', 'false')
            ->setDefault('nullValue', 'null')
            ->setAllowedTypes('trueValue', 'string')
            ->setAllowedTypes('falseValue', 'string')
            ->setAllowedTypes('nullValue', 'string')
        ;

        return $this;
    }

    public function getTrueValue(): string
    {
        return $this->options['trueValue'];
    }

    public function getFalseValue(): string
    {
        return $this->options['falseValue'];
    }

    public function getNullValue(): string
    {
        return $this->options['nullValue'];
    }

    public function isValidForSearch(mixed $value): bool
    {
        $value = trim(mb_strtolower($value));

        return ($value === $this->getTrueValue()) || ($value === $this->getFalseValue());
    }
}
