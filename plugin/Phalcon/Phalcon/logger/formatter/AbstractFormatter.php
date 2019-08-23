<?php

namespace Phalcon\Logger\Formatter;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
abstract class AbstractFormatter implements \Phalcon\Logger\Formatter\FormatterInterface
{

    /**
     * Interpolates context values into the message placeholders
     *
     * @see http://www.php-fig.org/psr/psr-3/ Section 1.2 Message
     * @param string $message
     * @param array $context
     */
    public function interpolate(string $message, $context = null) {}

}
