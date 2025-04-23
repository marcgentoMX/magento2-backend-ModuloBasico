<?php

namespace Marcgento\ModuloBasico\Block\Adminhtml;

class Subscription extends \Magento\Backend\Block\Widget\Grid\Container
{
    protected function _construct()
    {
        $this->_blockGroup = 'Marcgento_ModuloBasico';
        $this->_controller = 'adminhtml_subscription';
        parent::_construct();
    }
}