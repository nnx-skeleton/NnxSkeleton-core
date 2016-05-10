<?php
/**
 * Created by PhpStorm.
 * User: dmitry
 * Date: 29.04.16
 * Time: 12:32
 */
namespace NnxSkeletonMember\Core;

$config = [
    Module::CONFIG_KEY => [
        'objectManagerName' => 'doctrine.entitymanager.nnx_skeleton_member_core'
    ],
];

return array_merge_recursive(
    include __DIR__ . '/doctrine.config.php',
    $config
);