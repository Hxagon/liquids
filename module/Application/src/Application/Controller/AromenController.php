<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Application\Entity\Aroma;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Class AromenController
 * @package Application\Controller
 */
class AromenController extends AbstractActionController
{
    /**
     * @return ViewModel
     */
    public function indexAction()
    {
        $aromen = $this->getAromen();
        sort($aromen);
        return new ViewModel(
            array(
                'aromen' => $aromen
            )
        );
    }

    /**
     * @return array
     */
    private function getAromen()
    {
        $aroma = new Aroma();
        return $aroma->getAll();
    }
}
