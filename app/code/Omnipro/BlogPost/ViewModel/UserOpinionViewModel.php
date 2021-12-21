<?php
namespace Omnipro\BlogPost\ViewModel;

class UserOpinionViewModel implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    /**
     * @param \Omnipro\BlogPost\Model\ResourceModel\UserOpinion\CollectionFactory
     */
    private $userOpinionCollectionFactory;

    public function __construct(
        \Omnipro\BlogPost\Model\ResourceModel\UserOpinion\CollectionFactory $userOpinionCollectionFactory
    )
    {
        $this->userOpinionCollectionFactory = $userOpinionCollectionFactory;
        
    }

    public function getOpinions() {
        /**
         * @var \Omnipro\BlogPost\Model\ResourceModel\UserOpinion\Collection $userOpinionCollection
         */
        $userOpinionCollection = $this->userOpinionCollectionFactory->create();

        $userOpinionCollection->addFieldToSelect('*');
        return $userOpinionCollection->getItems();
    }
}
