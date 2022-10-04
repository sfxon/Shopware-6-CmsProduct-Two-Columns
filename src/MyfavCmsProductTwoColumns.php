<?php declare(strict_types=1);

namespace Myfav\CmsProductTwoColumns;

use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Filter\EqualsFilter;
use Shopware\Core\Framework\Plugin;
use Shopware\Core\Framework\Plugin\Context\InstallContext;
use Shopware\Core\Framework\Uuid\Uuid;
use Shopware\Core\System\CustomField\CustomFieldTypes;
use Shopware\Core\Framework\DataAbstractionLayer\Dbal\Exception\UnmappedFieldException;
use Shopware\Core\Framework\DataAbstractionLayer\Search\IdSearchResult;


class MyfavCmsProductTwoColumns extends Plugin
{
	public function install(InstallContext $installContext): void
	{
	}
}