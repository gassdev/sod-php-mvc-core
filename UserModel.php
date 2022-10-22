<?php
namespace Sod\PhpMvcCore;

use Sod\PhpMvcCore\db\DBModel;

/**
 * UserModel
 */
abstract class UserModel extends DBModel
{
    abstract public function getDisplayName(): string;
}
