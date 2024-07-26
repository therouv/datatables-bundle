# Symfony DataTables Bundle
[![Latest Stable Version](https://poser.pugx.org/omines/datatables-bundle/version)](https://packagist.org/packages/omines/datatables-bundle)
[![Total Downloads](https://poser.pugx.org/omines/datatables-bundle/downloads)](https://packagist.org/packages/omines/datatables-bundle)
[![Latest Unstable Version](https://poser.pugx.org/omines/datatables-bundle/v/unstable)](//packagist.org/packages/omines/datatables-bundle)
[![automated-testing](https://github.com/omines/datatables-bundle/actions/workflows/ci.yaml/badge.svg?branch=master&event=push)](https://github.com/omines/datatables-bundle/actions/workflows/ci.yaml)
[![codecov](https://codecov.io/gh/omines/datatables-bundle/graph/badge.svg?token=so9Qzps6jl)](https://codecov.io/gh/omines/datatables-bundle)
[![License](https://poser.pugx.org/omines/datatables-bundle/license)](https://packagist.org/packages/omines/datatables-bundle)

This bundle provides convenient integration of the popular [DataTables](https://datatables.net/) jQuery library
for realtime Ajax tables in your [Symfony](https://symfony.com/) 6.3+ application.

Unlike other bundles providing similar functionality we decoupled the implementation of the DataTables logic
completely from the source of the data. Therefore it is possible to implement your own custom adapters for
every possible data source. [Doctrine ORM](https://github.com/doctrine/DoctrineBundle), [MongoDB](https://github.com/mongodb/mongo-php-library) and [Elastica](https://github.com/ruflin/Elastica) come bundled. Handling other popular
choices like FOSElasticaBundle and Doctrine DBAL is possible.

## Documentation

[Visit the documentation with extensive code samples](https://omines.github.io/datatables-bundle/).

## Support

Unless you are highly confident your issue stems from a shortcoming of this bundle and needs the original developers
to look at it, please [ask all questions on Stack Overflow](https://stackoverflow.com/search?q=datatables+omines). We
simply don't have a lot of time to spare, so your questions will be answered faster and better over there.

## FAQ

- [Why is there no `DBALAdapter` bundled out of the box?](https://github.com/omines/datatables-bundle/pull/275#issuecomment-1420600416)

## Contributing

Please see [CONTRIBUTING.md](https://github.com/omines/datatables-bundle/blob/master/.github/CONTRIBUTING.md) for details.

## Legal

This software was developed for internal use at [Omines Full Service Internetbureau](https://www.omines.nl/)
in Eindhoven, the Netherlands. It is shared with the general public under the permissive MIT license, without
any guarantee of fitness for any particular purpose. Refer to the included `LICENSE` file for more details.
