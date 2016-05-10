<?php
namespace NnxSkeletonMember\Core\Options;

use Zend\Stdlib\AbstractOptions;
use Nnx\ModuleOptions\ModuleOptionsInterface;
use Nnx\Doctrine\ObjectManager\ObjectManagerNameProviderInterface;
use Nnx\Doctrine\ObjectManager\ObjectManagerNameProviderTrait;

/**
 * Class ModuleOptions
 *
 * @package NnxSkeletonMember\Core\Options
 */
class ModuleOptions extends AbstractOptions implements ModuleOptionsInterface, ObjectManagerNameProviderInterface
{
    use ObjectManagerNameProviderTrait;
}
