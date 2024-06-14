<?php

namespace RedCode\TreeBundle\Admin;

use App\Domain\Main\Admin\AbstractAdmin;

class AbstractTreeAdmin extends AbstractAdmin
{
    /**
     * @var string
     */
    private $treeTextField;

    public function __construct($code, $class, $baseControllerName, $treeTextField)
    {
        if (empty($treeTextField)) {
            throw new \UnexpectedValueException('It\'s required to specify \'treeTextField\' for tree view');
        }
        $this->treeTextField = $treeTextField;
    }

    /**
     * @return string
     */
    public function getTreeTextField()
    {
        return $this->treeTextField;
    }
}
