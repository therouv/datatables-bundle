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
 * NumberColumn.
 *
 * @author Niels Keurentjes <niels.keurentjes@omines.com>
 */
class NumberColumn extends AbstractColumn
{
    public function normalize(mixed $value): string
    {
        $value = (string) $value;
        if (is_numeric($value)) {
            return $value;
        }

        return $this->isRaw() ? $value : (string) floatval($value);
    }

    protected function configureOptions(OptionsResolver $resolver): static
    {
        parent::configureOptions($resolver);

        $resolver
            ->setDefault('raw', false)
            ->setAllowedTypes('raw', 'bool')
        ;

        return $this;
    }

    public function isRaw(): bool
    {
        return $this->options['raw'];
    }

    public function isValidForSearch(mixed $value): bool
    {
        return is_numeric($value);
    }
}
