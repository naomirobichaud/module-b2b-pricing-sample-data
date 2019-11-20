<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagentoEse\B2BPricingSampleData\Setup\Patch\Data;


use Magento\Framework\Setup\Patch\DataPatchInterface;
use MagentoEse\B2BPricingSampleData\Model\PreferredProducts;
use MagentoEse\B2BPricingSampleData\Setup\SetSession;

class AddPreferredProducts implements DataPatchInterface
{

    /** @var PreferredProducts  */
    protected $preferredProducts;

    /**
     * AddPreferredProducts constructor.
     * @param PreferredProducts $preferredProducts
     * @param SetSession $setSession
     */
    public function __construct(PreferredProducts $preferredProducts, SetSession $setSession)
    {
        $this->preferredProducts = $preferredProducts;
    }

    public function apply()
    {
        $this->preferredProducts->install(['MagentoEse_B2BPricingSampleData::fixtures/preferredproducts.csv']);
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