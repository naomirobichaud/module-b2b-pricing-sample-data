<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagentoEse\B2BPricingSampleData\Setup\Patch\Data;


use Magento\Framework\Setup\Patch\DataPatchInterface;
use MagentoEse\B2BPricingSampleData\Model\TierPricing;

class AddTierPricing implements DataPatchInterface
{

    /** @var TierPricing  */
    protected $tierPricing;

    /**
     * AddTierPricing constructor.
     * @param TierPricing $tierPricing
     */
    public function __construct(TierPricing $tierPricing)
    {
        $this->tierPricing = $tierPricing;
    }

    public function apply()
    {
        $this->tierPricing->install(['MagentoEse_B2BPricingSampleData::fixtures/tierpricing.csv']);
    }

    public static function getDependencies()
    {
        return [];
    }

    public function getAliases()
    {
        return [];
    }
}