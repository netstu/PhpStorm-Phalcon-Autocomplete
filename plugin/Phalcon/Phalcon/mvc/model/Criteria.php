<?php

namespace Phalcon\Mvc\Model;

use Phalcon\Di\DiInterface;
use Phalcon\Mvc\Model\Query\BuilderInterface;

/**
 * Phalcon\Mvc\Model\Criteria
 *
 * This class is used to build the array parameter required by
 * Phalcon\Mvc\Model::find() and Phalcon\Mvc\Model::findFirst() using an
 * object-oriented interface.
 *
 * ```php
 * $robots = Robots::query()
 *     ->where("type = :type:")
 *     ->andWhere("year < 2000")
 *     ->bind(["type" => "mechanical"])
 *     ->limit(5, 10)
 *     ->orderBy("name")
 *     ->execute();
 * ```
 */
class Criteria implements \Phalcon\Mvc\Model\CriteriaInterface, \Phalcon\Di\InjectionAwareInterface
{

    protected $bindParams;


    protected $bindTypes;


    protected $hiddenParamNumber = 0;


    protected $model;


    protected $params = array();


    /**
     * Sets the DependencyInjector container
     *
     * @param \Phalcon\Di\DiInterface $container
     */
    public function setDI(\Phalcon\Di\DiInterface $container)
    {
    }

    /**
     * Returns the DependencyInjector container
     *
     * @return \Phalcon\Di\DiInterface
     */
    public function getDI(): DiInterface
    {
    }

    /**
     * Set a model on which the query will be executed
     *
     * @param string $modelName
     * @return \Phalcon\Mvc\Model\CriteriaInterface
     */
    public function setModelName(string $modelName): CriteriaInterface
    {
    }

    /**
     * Returns an internal model name on which the criteria will be applied
     *
     * @return string
     */
    public function getModelName(): string
    {
    }

    /**
     * Sets the bound parameters in the criteria
     * This method replaces all previously set bound parameters
     *
     * @param array $bindParams
     * @param bool $merge
     * @return \Phalcon\Mvc\Model\CriteriaInterface
     */
    public function bind(array $bindParams, bool $merge = false): CriteriaInterface
    {
    }

    /**
     * Sets the bind types in the criteria
     * This method replaces all previously set bound parameters
     *
     * @param array $bindTypes
     * @return \Phalcon\Mvc\Model\CriteriaInterface
     */
    public function bindTypes(array $bindTypes): CriteriaInterface
    {
    }

    /**
     * Sets SELECT DISTINCT / SELECT ALL flag
     *
     * @param mixed $distinct
     * @return \Phalcon\Mvc\Model\CriteriaInterface
     */
    public function distinct($distinct): CriteriaInterface
    {
    }

    /**
     * Sets the columns to be queried
     *
     * ```php
     * $criteria->columns(
     *     [
     *         "id",
     *         "name",
     *     ]
     * );
     * ```
     *
     * @param string|array $columns
     * @return \Phalcon\Mvc\Model\CriteriaInterface
     */
    public function columns($columns): CriteriaInterface
    {
    }

    /**
     * Adds an INNER join to the query
     *
     * ```php
     * $criteria->join(
     *     Robots::class
     * );
     *
     * $criteria->join(
     *     Robots::class,
     *     "r.id = RobotsParts.robots_id"
     * );
     *
     * $criteria->join(
     *     Robots::class,
     *     "r.id = RobotsParts.robots_id",
     *     "r"
     * );
     *
     * $criteria->join(
     *     Robots::class,
     *     "r.id = RobotsParts.robots_id",
     *     "r",
     *     "LEFT"
     * );
     * ```
     *
     * @param string $model
     * @param mixed $conditions
     * @param mixed $alias
     * @param mixed $type
     * @return \Phalcon\Mvc\Model\CriteriaInterface
     */
    public function join(string $model, $conditions = null, $alias = null, $type = null): CriteriaInterface
    {
    }

    /**
     * Adds an INNER join to the query
     *
     * ```php
     * $criteria->innerJoin(
     *     Robots::class
     * );
     *
     * $criteria->innerJoin(
     *     Robots::class,
     *     "r.id = RobotsParts.robots_id"
     * );
     *
     * $criteria->innerJoin(
     *     Robots::class,
     *     "r.id = RobotsParts.robots_id",
     *     "r"
     * );
     * ```
     *
     * @param string $model
     * @param mixed $conditions
     * @param mixed $alias
     * @return \Phalcon\Mvc\Model\CriteriaInterface
     */
    public function innerJoin(string $model, $conditions = null, $alias = null): CriteriaInterface
    {
    }

    /**
     * Adds a LEFT join to the query
     *
     * ```php
     * $criteria->leftJoin(
     *     Robots::class,
     *     "r.id = RobotsParts.robots_id",
     *     "r"
     * );
     * ```
     *
     * @param string $model
     * @param mixed $conditions
     * @param mixed $alias
     * @return \Phalcon\Mvc\Model\CriteriaInterface
     */
    public function leftJoin(string $model, $conditions = null, $alias = null): CriteriaInterface
    {
    }

    /**
     * Adds a RIGHT join to the query
     *
     * ```php
     * $criteria->rightJoin(
     *     Robots::class,
     *     "r.id = RobotsParts.robots_id",
     *     "r"
     * );
     * ```
     *
     * @param string $model
     * @param mixed $conditions
     * @param mixed $alias
     * @return \Phalcon\Mvc\Model\CriteriaInterface
     */
    public function rightJoin(string $model, $conditions = null, $alias = null): CriteriaInterface
    {
    }

    /**
     * Sets the conditions parameter in the criteria
     *
     * @param string $conditions
     * @param mixed $bindParams
     * @param mixed $bindTypes
     * @return \Phalcon\Mvc\Model\CriteriaInterface
     */
    public function where(string $conditions, $bindParams = null, $bindTypes = null): CriteriaInterface
    {
    }

    /**
     * Appends a condition to the current conditions using an AND operator
     *
     * @param string $conditions
     * @param mixed $bindParams
     * @param mixed $bindTypes
     * @return \Phalcon\Mvc\Model\CriteriaInterface
     */
    public function andWhere(string $conditions, $bindParams = null, $bindTypes = null): CriteriaInterface
    {
    }

    /**
     * Appends a condition to the current conditions using an OR operator
     *
     * @param string $conditions
     * @param mixed $bindParams
     * @param mixed $bindTypes
     * @return \Phalcon\Mvc\Model\CriteriaInterface
     */
    public function orWhere(string $conditions, $bindParams = null, $bindTypes = null): CriteriaInterface
    {
    }

    /**
     * Appends a BETWEEN condition to the current conditions
     *
     * ```php
     * $criteria->betweenWhere("price", 100.25, 200.50);
     * ```
     *
     * @param string $expr
     * @param mixed $minimum
     * @param mixed $maximum
     * @return \Phalcon\Mvc\Model\CriteriaInterface
     */
    public function betweenWhere(string $expr, $minimum, $maximum): CriteriaInterface
    {
    }

    /**
     * Appends a NOT BETWEEN condition to the current conditions
     *
     * ```php
     * $criteria->notBetweenWhere("price", 100.25, 200.50);
     * ```
     *
     * @param string $expr
     * @param mixed $minimum
     * @param mixed $maximum
     * @return \Phalcon\Mvc\Model\CriteriaInterface
     */
    public function notBetweenWhere(string $expr, $minimum, $maximum): CriteriaInterface
    {
    }

    /**
     * Appends an IN condition to the current conditions
     *
     * ```php
     * $criteria->inWhere("id", [1, 2, 3]);
     * ```
     *
     * @param string $expr
     * @param array $values
     * @return \Phalcon\Mvc\Model\CriteriaInterface
     */
    public function inWhere(string $expr, array $values): CriteriaInterface
    {
    }

    /**
     * Appends a NOT IN condition to the current conditions
     *
     * ```php
     * $criteria->notInWhere("id", [1, 2, 3]);
     * ```
     *
     * @param string $expr
     * @param array $values
     * @return \Phalcon\Mvc\Model\CriteriaInterface
     */
    public function notInWhere(string $expr, array $values): CriteriaInterface
    {
    }

    /**
     * Adds the conditions parameter to the criteria
     *
     * @param string $conditions
     * @return \Phalcon\Mvc\Model\CriteriaInterface
     */
    public function conditions(string $conditions): CriteriaInterface
    {
    }

    /**
     * Adds the order-by clause to the criteria
     *
     * @param string $orderColumns
     * @return \Phalcon\Mvc\Model\CriteriaInterface
     */
    public function orderBy(string $orderColumns): CriteriaInterface
    {
    }

    /**
     * Adds the group-by clause to the criteria
     *
     * @param mixed $group
     * @return \Phalcon\Mvc\Model\CriteriaInterface
     */
    public function groupBy($group): CriteriaInterface
    {
    }

    /**
     * Adds the having clause to the criteria
     *
     * @param mixed $having
     * @return \Phalcon\Mvc\Model\CriteriaInterface
     */
    public function having($having): CriteriaInterface
    {
    }

    /**
     * Adds the limit parameter to the criteria.
     *
     * ```php
     * $criteria->limit(100);
     * $criteria->limit(100, 200);
     * $criteria->limit("100", "200");
     * ```
     *
     * @param int $limit
     * @param int $offset
     * @return \Phalcon\Mvc\Model\CriteriaInterface
     */
    public function limit(int $limit, int $offset = 0): CriteriaInterface
    {
    }

    /**
     * Adds the "for_update" parameter to the criteria
     *
     * @param bool $forUpdate
     * @return \Phalcon\Mvc\Model\CriteriaInterface
     */
    public function forUpdate(bool $forUpdate = true): CriteriaInterface
    {
    }

    /**
     * Adds the "shared_lock" parameter to the criteria
     *
     * @param bool $sharedLock
     * @return \Phalcon\Mvc\Model\CriteriaInterface
     */
    public function sharedLock(bool $sharedLock = true): CriteriaInterface
    {
    }

    /**
     * Sets the cache options in the criteria
     * This method replaces all previously set cache options
     *
     * @param array $cache
     * @return \Phalcon\Mvc\Model\CriteriaInterface
     */
    public function cache(array $cache): CriteriaInterface
    {
    }

    /**
     * Returns the conditions parameter in the criteria
     *
     * @return string|null
     */
    public function getWhere(): ?string
    {
    }

    /**
     * Returns the columns to be queried
     *
     * @return string|null
     */
    public function getColumns(): ?string
    {
    }

    /**
     * Returns the conditions parameter in the criteria
     *
     * @return string|null
     */
    public function getConditions(): ?string
    {
    }

    /**
     * Returns the limit parameter in the criteria, which will be an integer if
     * limit was set without an offset, an array with 'number' and 'offset' keys
     * if an offset was set with the limit, or null if limit has not been set.
     *
     * @return string|null
     */
    public function getLimit(): ?string
    {
    }

    /**
     * Returns the order clause in the criteria
     *
     * @return string|null
     */
    public function getOrderBy(): ?string
    {
    }

    /**
     * Returns the group clause in the criteria
     */
    public function getGroupBy()
    {
    }

    /**
     * Returns the having clause in the criteria
     */
    public function getHaving()
    {
    }

    /**
     * Returns all the parameters defined in the criteria
     *
     * @return array
     */
    public function getParams(): array
    {
    }

    /**
     * Builds a Phalcon\Mvc\Model\Criteria based on an input array like $_POST
     *
     * @param \Phalcon\Di\DiInterface $container
     * @param string $modelName
     * @param array $data
     * @param string $operator
     * @return \Phalcon\Mvc\Model\CriteriaInterface
     */
    public static function fromInput(\Phalcon\Di\DiInterface $container, string $modelName, array $data, string $operator = 'AND'): CriteriaInterface
    {
    }

    /**
     * Creates a query builder from criteria.
     *
     * ```php
     * $builder = Robots::query()
     *     ->where("type = :type:")
     *     ->bind(["type" => "mechanical"])
     *     ->createBuilder();
     * ```
     *
     * @return \Phalcon\Mvc\Model\Query\BuilderInterface
     */
    public function createBuilder(): BuilderInterface
    {
    }

    /**
     * Executes a find using the parameters built with the criteria
     *
     * @return \Phalcon\Mvc\Model\ResultsetInterface
     */
    public function execute(): ResultsetInterface
    {
    }
}
