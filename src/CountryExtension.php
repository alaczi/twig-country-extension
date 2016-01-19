<?php

namespace alaczi\Twig\Extension;

use Symfony\Component\Intl\Intl;

/**
 * Simple class to implement country twig filter
 * @package alaczi\Twig\Extension
 */
class CountryExtension extends \Twig_Extension
{
    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('country', array($this, 'countryFilter')),
        );
    }

    /**
     * {@inheritdoc}
     */
    public function countryFilter($countryCode, $displayLocale = null)
    {
        $country = Intl::getRegionBundle()->getCountryName($countryCode, $displayLocale);
        return $country;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'country_extension';
    }
}
