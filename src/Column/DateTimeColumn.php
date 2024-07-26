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
 * DateTimeColumn.
 *
 * @author Niels Keurentjes <niels.keurentjes@omines.com>
 */
class DateTimeColumn extends AbstractColumn
{
    public function normalize(mixed $value): mixed
    {
        if (null === $value) {
            return $this->options['nullValue'];
        }

        if (!$value instanceof \DateTimeInterface) {
            if (!empty($this->options['createFromFormat'])) {
                $value = \DateTime::createFromFormat($this->options['createFromFormat'], (string) $value);
                if (false === $value) {
                    $errors = \DateTime::getLastErrors();
                    throw new \RuntimeException($errors ? implode(', ', $errors['errors'] ?: $errors['warnings']) : 'DateTime conversion failed for unknown reasons');
                }
            } else {
                $value = new \DateTime((string) $value);
            }
        }

        return $value->format($this->options['format']);
    }

    protected function configureOptions(OptionsResolver $resolver): static
    {
        parent::configureOptions($resolver);

        $resolver
            ->setDefaults([
                'createFromFormat' => '',
                'format' => 'c',
                'nullValue' => '',
            ])
            ->setAllowedTypes('createFromFormat', 'string')
            ->setAllowedTypes('format', 'string')
            ->setAllowedTypes('nullValue', 'string')
        ;

        return $this;
    }
}
