<?php

namespace WatchChallengeBundle\Entity;

use WatchChallengeBundle\Entity\BaseEntity;
/**
 * Image
 */
class WatchImage extends BaseEntity
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $path;

    /**
     * @var \DateTime
     */
    private $updated;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var \WatchChallengeBundle\Entity\Watch
     */
    private $watch;

    const BaseUrl = 'img/watch/';

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
     * Get watch
     *
     * @return Watch
     */
    public function getWatch()
    {
        return $this->watch;
    }

    /**
     * Set watch
     *
     * @param \WatchChallengeBundle\Entity\Watch $watch
     * @return WatchImage
     */
    public function setWatch(Watch $watch = null)
    {
        $this->watch = $watch;

        return $this;
    }

    /**
     * Set path
     *
     * @param string $path
     *
     * @return WatchImage
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return WatchImage
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
     * @return WatchImage
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

