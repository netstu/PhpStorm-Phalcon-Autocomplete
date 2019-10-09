<?php

/**
 * This file is part of the Phalcon.
 *
 * (c) Phalcon Team <team@phalcon.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Phalcon\Session;

use InvalidArgumentException;
use Phalcon\DI\AbstractInjectionAware;
use SessionHandlerInterface;

/**
 * Phalcon\Session\Manager
 *
 * Session manager class
 */
class Manager extends AbstractInjectionAware implements ManagerInterface
{
    /**
     * @var <SessionHandlerInterface>|null
     */
    private $adapter = null;

    /**
     * @var string
     */
    private $name = '';

    /**
     * @var array
     */
    private $options = array();

    /**
     * @var string
     */
    private $uniqueId = '';


    /**
     * Manager constructor.
     *
     * @param array $options
     */
    public function __construct(array $options = array())
    {
    }

    /**
     * Alias: Gets a session variable from an application context
     *
     * @param string $key
     * @return mixed
     */
    public function __get(string $key)
    {
    }

    /**
     * Alias: Check whether a session variable is set in an application context
     *
     * @param string $key
     * @return bool
     */
    public function __isset(string $key): bool
    {
    }

    /**
     * Alias: Sets a session variable in an application context
     *
     * @param string $key
     * @param mixed $value
     */
    public function __set(string $key, $value)
    {
    }

    /**
     * Alias: Removes a session variable from an application context
     *
     * @param string $key
     */
    public function __unset(string $key)
    {
    }

    /**
     * Destroy/end a session
     */
    public function destroy()
    {
    }

    /**
     * Check whether the session has been started
     *
     * @return bool
     */
    public function exists(): bool
    {
    }

    /**
     * Gets a session variable from an application context
     *
     * @param string $key
     * @param mixed $defaultValue
     * @param bool $remove
     * @return mixed
     */
    public function get(string $key, $defaultValue = null, bool $remove = false)
    {
    }

    /**
     * Returns the stored session adapter
     *
     * @return \SessionHandlerInterface
     */
    public function getAdapter(): SessionHandlerInterface
    {
    }

    /**
     * Returns the session id
     *
     * @return string
     */
    public function getId(): string
    {
    }

    /**
     * Returns the name of the session
     *
     * @return string
     */
    public function getName(): string
    {
    }

    /**
     * Check whether a session variable is set in an application context
     *
     * @param string $key
     * @return bool
     */
    public function has(string $key): bool
    {
    }

    /**
     * Get internal options
     *
     * @return array
     */
    public function getOptions(): array
    {
    }

    /**
     * Regenerates the session id using the adapter.
     *
     * @param mixed $deleteOldSession
     * @return \Phalcon\Session\ManagerInterface
     */
    public function regenerateId($deleteOldSession = true): ManagerInterface
    {
    }

    /**
     * Removes a session variable from an application context
     *
     * @param string $key
     */
    public function remove(string $key)
    {
    }

    /**
     * Sets a session variable in an application context
     *
     * @param string $key
     * @param mixed $value
     */
    public function set(string $key, $value)
    {
    }

    /**
     * Set the adapter for the session
     *
     * @param \SessionHandlerInterface $adapter
     * @return \Phalcon\Session\ManagerInterface
     */
    public function setAdapter(\SessionHandlerInterface $adapter): ManagerInterface
    {
    }

    /**
     * Set session Id
     *
     * @param string $id
     * @return \Phalcon\Session\ManagerInterface
     */
    public function setId(string $id): ManagerInterface
    {
    }

    /**
     * Set the session name. Throw exception if the session has started
     * and do not allow poop names
     *
     * @param  string name
     *
     * @throws InvalidArgumentException
     *
     * @param string $name
     * @return \Phalcon\Session\ManagerInterface
     */
    public function setName(string $name): ManagerInterface
    {
    }

    /**
     * Sets session's options
     *
     * @param array $options
     */
    public function setOptions(array $options)
    {
    }

    /**
     * Starts the session (if headers are already sent the session will not be
     * started)
     *
     * @return bool
     */
    public function start(): bool
    {
    }

    /**
     * Returns the status of the current session.
     *
     * @return int
     */
    public function status(): int
    {
    }

    /**
     * Returns the key prefixed
     *
     * @param string $key
     * @return string
     */
    private function getUniqueKey(string $key): string
    {
    }
}
