<?php

namespace Magestudy\Crud\Controller\Adminhtml\Post;

use Magestudy\Crud\Api\PostRepositoryInterface;
use Magestudy\Crud\Controller\Adminhtml\AbstractMassEnable;
use Magestudy\Crud\Helper\AclResources;
use Magestudy\Crud\Model\Post;
use Magestudy\Crud\Model\ResourceModel\Post\Collection as PostCollection;

class MassEnable extends AbstractMassEnable
{
    /**
     * @return string
     */
    protected function _getAclResource()
    {
        return AclResources::POST_SAVE;
    }

    /**
     * @return string
     */
    protected function _getEntityTitle()
    {
        return __(Post::ENTITY_TITLE);
    }

    /**
     * @return string
     */
    protected function _getCollectionClass()
    {
        return PostCollection::class;
    }

    /**
     * @return string
     */
    protected function _getRepositoryInterface()
    {
        return PostRepositoryInterface::class;
    }
}