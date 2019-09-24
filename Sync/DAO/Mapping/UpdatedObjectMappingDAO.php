<?php

declare(strict_types=1);

/*
 * @copyright   2018 Mautic Inc. All rights reserved
 * @author      Mautic, Inc.
 *
 * @link        https://www.mautic.com
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace MauticPlugin\IntegrationsBundle\Sync\DAO\Mapping;

class UpdatedObjectMappingDAO
{
    /**
     * @var string
     */
    private $integration;

    /**
     * @var string
     */
    private $integrationObjectName;

    /**
     * @var mixed
     */
    private $integrationObjectId;

    /**
     * @var \DateTime
     */
    private $objectModifiedDate;

    /**
     * UpdatedObjectMappingDAO constructor.
     *
     * @param string             $integration
     * @param string             $integrationObjectName
     * @param mixed              $integrationObjectId
     * @param \DateTimeInterface $objectModifiedDate
     */
    public function __construct(
        $integration,
        $integrationObjectName,
        $integrationObjectId,
        \DateTimeInterface $objectModifiedDate
    ) {
        $this->integration           = $integration;
        $this->integrationObjectName = $integrationObjectName;
        $this->integrationObjectId   = $integrationObjectId;
        $this->objectModifiedDate    = $objectModifiedDate instanceof \DateTimeImmutable ? new \DateTime(
            $objectModifiedDate->format('Y-m-d H:i:s'),
            $objectModifiedDate->getTimezone()
        ) : $objectModifiedDate;
    }

    /**
     * @return string
     */
    public function getIntegration(): string
    {
        return $this->integration;
    }

    /**
     * @return string
     */
    public function getIntegrationObjectName(): string
    {
        return $this->integrationObjectName;
    }

    /**
     * @return mixed
     */
    public function getIntegrationObjectId()
    {
        return $this->integrationObjectId;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getObjectModifiedDate(): \DateTimeInterface
    {
        return $this->objectModifiedDate;
    }
}
