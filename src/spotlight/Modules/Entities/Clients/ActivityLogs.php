<?php

namespace Spotlight\Entities\Clients;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityManager;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\DBAL\Types\Type;

use Doctrine\ORM\Mapping as ORM;
/**
 * ActivityLogs
 */
class ActivityLogs
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var string
     */
    private $actionTable;

    /**
     * @var string
     */
    private $actionModule;

    /**
     * @var integer
     */
    private $actionItem;

    /**
     * @var string
     */
    private $action;

    /**
     * @var \DateTime
     */
    private $actionDate;

    /**
     * @var string
     */
    private $interface;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var \ClientUsers
     */
    private $actionBy;

    /**
     * @var \Clients
     */
    private $client;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return ActivityLogs
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set actionTable
     *
     * @param string $actionTable
     *
     * @return ActivityLogs
     */
    public function setActionTable($actionTable)
    {
        $this->actionTable = $actionTable;

        return $this;
    }

    /**
     * Get actionTable
     *
     * @return string
     */
    public function getActionTable()
    {
        return $this->actionTable;
    }

    /**
     * Set actionModule
     *
     * @param string $actionModule
     *
     * @return ActivityLogs
     */
    public function setActionModule($actionModule)
    {
        $this->actionModule = $actionModule;

        return $this;
    }

    /**
     * Get actionModule
     *
     * @return string
     */
    public function getActionModule()
    {
        return $this->actionModule;
    }

    /**
     * Set actionItem
     *
     * @param integer $actionItem
     *
     * @return ActivityLogs
     */
    public function setActionItem($actionItem)
    {
        $this->actionItem = $actionItem;

        return $this;
    }

    /**
     * Get actionItem
     *
     * @return integer
     */
    public function getActionItem()
    {
        return $this->actionItem;
    }

    /**
     * Set action
     *
     * @param string $action
     *
     * @return ActivityLogs
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set actionDate
     *
     * @param \DateTime $actionDate
     *
     * @return ActivityLogs
     */
    public function setActionDate($actionDate)
    {
        $this->actionDate = $actionDate;

        return $this;
    }

    /**
     * Get actionDate
     *
     * @return \DateTime
     */
    public function getActionDate()
    {
        return $this->actionDate;
    }

    /**
     * Set interface
     *
     * @param string $interface
     *
     * @return ActivityLogs
     */
    public function setInterface($interface)
    {
        $this->interface = $interface;

        return $this;
    }

    /**
     * Get interface
     *
     * @return string
     */
    public function getInterface()
    {
        return $this->interface;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return ActivityLogs
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return ActivityLogs
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set actionBy
     *
     * @param \ClientUsers $actionBy
     *
     * @return ActivityLogs
     */
    public function setActionBy(\ClientUsers $actionBy = null)
    {
        $this->actionBy = $actionBy;

        return $this;
    }

    /**
     * Get actionBy
     *
     * @return \ClientUsers
     */
    public function getActionBy()
    {
        return $this->actionBy;
    }

    /**
     * Set client
     *
     * @param \Clients $client
     *
     * @return ActivityLogs
     */
    public function setClient(\Clients $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \Clients
     */
    public function getClient()
    {
        return $this->client;
    }
}

