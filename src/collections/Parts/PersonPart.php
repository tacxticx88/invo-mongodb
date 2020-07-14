<?php
declare(strict_types=1);

/**
 * This file is part of the Invo.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace InvoMongodb\Collections\Parts;

use Phalcon\Incubator\Mvc\Collection\Document;

/**
 * Class PersonPart
 *
 * @package InvoMongodb\Collections\Parts
 */
class PersonPart extends Document
{
    public $id;

    public $name;

    public $type;
}