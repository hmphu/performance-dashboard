<?php

namespace MageHost\PerformanceDashboard\Controller\Adminhtml\Dashboard;

/**
 * Performance Dashboard Index Controller
 * @package MageHost\PerformanceDashboard\Controller\Adminhtml\Dashboard
 */
class Index extends \Magento\Backend\App\Action
{
    /** @var \Magento\Framework\View\Result\PageFactory */
    protected $_resultPageFactory;

    /**
     * Constructor
     *
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
    
        parent::__construct($context);
        $this->_resultPageFactory = $resultPageFactory;
    }

    /**
     * Load the page defined in view/adminhtml/layout/magehost_performance_dashboard_index.xml
     *
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        return $this->_resultPageFactory->create();
    }
}