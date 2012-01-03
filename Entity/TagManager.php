<?php

/*
 * This file is part of the FPNTagBundle package.
 * (c) 2011 Fabien Pennequin <fabien@pennequin.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FPN\TagBundle\Entity;

use DoctrineExtensions\Taggable\TagManager as BaseTagManager;
use Doctrine\ORM\EntityManager;

class TagManager extends BaseTagManager
{
}
