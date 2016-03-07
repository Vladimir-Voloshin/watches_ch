<?php

namespace WatchChallengeBundle\Entity;

use WatchChallengeBundle\Entity\BaseEntity;
/**
 * CaseMaterial
 */
class CaseMaterial extends BaseEntity
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $materialName;

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
     * @param string $materialName
     *
     * @return CaseMaterial
     */
    public function setMaterialName($materialName)
    {
        $this->materialName = $materialName;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getMaterialName()
    {
        return $this->materialName;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return CaseMaterial
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
     * @return CaseMaterial
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

