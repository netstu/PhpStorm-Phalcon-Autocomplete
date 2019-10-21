<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Translate;

use Phalcon\Factory\AbstractFactory;

class TranslateFactory extends AbstractFactory
{
    /**
     * @var InterpolatorFactory
     */
    private $interpolator;


    /**
     * AdapterFactory constructor.
     *
     * @param \Phalcon\Translate\InterpolatorFactory $interpolator
     * @param array $services
     */
    public function __construct(\Phalcon\Translate\InterpolatorFactory $interpolator, array $services = array())
    {
    }

    /**
     * Factory to create an instace from a Config object
     *
     * @param mixed $config
     * @return mixed
     */
    public function load($config)
    {
    }

    /**
     * Create a new instance of the adapter
     *
     * @param string $name
     * @param array $options
     * @return AbstractAdapter
     */
    public function newInstance(string $name, array $options = array()): AbstractAdapter
    {
    }

    /**
     * @return array
     */
    protected function getAdapters(): array
    {
    }
}
