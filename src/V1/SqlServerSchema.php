<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datastream/v1/datastream_resources.proto

namespace Google\Cloud\Datastream\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SQLServer schema.
 *
 * Generated from protobuf message <code>google.cloud.datastream.v1.SqlServerSchema</code>
 */
class SqlServerSchema extends \Google\Protobuf\Internal\Message
{
    /**
     * Schema name.
     *
     * Generated from protobuf field <code>string schema = 1;</code>
     */
    protected $schema = '';
    /**
     * Tables in the schema.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datastream.v1.SqlServerTable tables = 2;</code>
     */
    private $tables;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $schema
     *           Schema name.
     *     @type array<\Google\Cloud\Datastream\V1\SqlServerTable>|\Google\Protobuf\Internal\RepeatedField $tables
     *           Tables in the schema.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datastream\V1\DatastreamResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Schema name.
     *
     * Generated from protobuf field <code>string schema = 1;</code>
     * @return string
     */
    public function getSchema()
    {
        return $this->schema;
    }

    /**
     * Schema name.
     *
     * Generated from protobuf field <code>string schema = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSchema($var)
    {
        GPBUtil::checkString($var, True);
        $this->schema = $var;

        return $this;
    }

    /**
     * Tables in the schema.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datastream.v1.SqlServerTable tables = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTables()
    {
        return $this->tables;
    }

    /**
     * Tables in the schema.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datastream.v1.SqlServerTable tables = 2;</code>
     * @param array<\Google\Cloud\Datastream\V1\SqlServerTable>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTables($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Datastream\V1\SqlServerTable::class);
        $this->tables = $arr;

        return $this;
    }

}
