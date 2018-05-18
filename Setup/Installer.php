<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace MagentoEse\B2BPricingSampleData\Setup;

use Magento\Framework\Setup;


class Installer implements Setup\SampleData\InstallerInterface
{
    

    /**
     * @var \MagentoEse\B2BPricingSampleData\Model\TierPricing
     */
    protected $tierPricing;

    /**
     * @var \MagentoEse\B2BPricingSampleData\Model\Related
     */
    protected $relatedProducts;

    /**
     * @var \MagentoEse\B2BPricingSampleData\Model\PreferredProducts
     */
    protected $preferredProducts;


    /**
     * Installer constructor.
     * @param \MagentoEse\B2BPricingSampleData\Model\CompanyCatalog $catalogSetup
     * @param \MagentoEse\B2BPricingSampleData\Model\SharedCatalogConfig $sharedCatalogConfig
     * @param \MagentoEse\B2BPricingSampleData\Model\TierPricing $tierPricing
     * @param \MagentoEse\B2BPricingSampleData\Model\PreferredProducts $preferredProducts
     * @param \MagentoEse\B2BPricingSampleData\Model\Related $relatedProducts
     */
    public function __construct(

        \MagentoEse\B2BPricingSampleData\Model\TierPricing $tierPricing,
        \MagentoEse\B2BPricingSampleData\Model\PreferredProducts $preferredProducts,
        \MagentoEse\B2BPricingSampleData\Model\Related $relatedProducts

    ) {

        $this->tierPricing = $tierPricing;
        $this->preferredProducts = $preferredProducts;
        $this->relatedProducts = $relatedProducts;
    }

    /**
     * {@inheritdoc}
     */
    public function install()
    {   
        $this->relatedProducts->install(['MagentoEse_B2BPricingSampleData::fixtures/related_products.csv']);
        $this->preferredProducts->install(['MagentoEse_B2BPricingSampleData::fixtures/preferredproducts.csv']);
        $this->tierPricing->install([
            'MagentoEse_B2BPricingSampleData::fixtures/legrand_tier_pricing.csv',
            'MagentoEse_B2BPricingSampleData::fixtures/milwaukee_tier_pricing.csv',
            'MagentoEse_B2BPricingSampleData::fixtures/philips_tier_pricing.csv',
            'MagentoEse_B2BPricingSampleData::fixtures/siemens_tier_pricing.csv',
            'MagentoEse_B2BPricingSampleData::fixtures/case_tier_pricing.csv']);
    }
}