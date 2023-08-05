<?php

namespace Hackathon\SmartProductRecommendation\Block\SmartRecommendations;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class Product extends Template implements BlockInterface
{
    protected $_template = "widget/smartrecommendations/list.phtml";

    public function __construct(Template\Context $context, array $data = [])
    {
        parent::__construct($context, $data);
    }
}
