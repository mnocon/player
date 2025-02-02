<?php

/*
 * This file is part of the Blackfire Player package.
 *
 * (c) Fabien Potencier <fabien@blackfire.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Blackfire\Player\Build;

readonly class Build
{
    public function __construct(
        public string $uuid,
        public null|string $url = null,
    ) {
    }
}
