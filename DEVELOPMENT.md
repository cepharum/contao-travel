# Development Information

## Namespace

The plugin complies with following pattern on using namespaces.

1. First part is the vendor's name in PascalCase, `Cepharum`.
2. Second part is the name of product this software is related to, `Contao`. There may be classes defined in this namespace to be commonly used by all plugins for the product. However you should put those into a different plugin and make it a dependency here.
3. Third part is identifying the plugin, `Travel`.
4. All additional parts are used to name classes that belong to that plugin.

## References

Development relies on several websites on how to develop Contao plugins:

### Plugin Development

* https://symfony.com/doc/current/bundles.html
* https://www.cyberspectrum.de/files/downloads/talks/c4extension_cnt2017.pdf
* https://docs.contao.org/books/extending-contao4/managed-edition/
* https://xuad.net/artikel/contao-4-bundle-plugin-erstellen-backend-und-frontend

### DCA

* https://docs.contao.org/books/api/dca/reference.html

## Variations

In some aspects development varies from all those sources:

* Classes got named less redundantly. Instead of having a class `Cepharum\Contao\TravelBundle\CepharumContaoTravelBundle` there is a class `Cepharum\Contao\Travel\Bundle` as this makes sense in itself. Any ambiguities due to comparing non-qualified names should be resolved by working with qualified names, only.
