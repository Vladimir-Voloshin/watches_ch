<?php

namespace WatchChallengeBundle\Entity;

use WatchChallengeBundle\Entity\BaseEntity;
/**
 * WatchCondition
 */
class WatchCondition extends BaseEntity
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $conditionName;

    /**
     * @var \DateTime
     */
    private $updated;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $conditionName
     *
     * @return WatchCondition
     */
    public function setConditionName($conditionName)
    {
        $this->conditionName = $conditionName;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getConditionName()
    {
        return $this->conditionName;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return Brand
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Brand
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }
}

