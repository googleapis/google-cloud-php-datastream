<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datastream/v1/datastream_resources.proto

namespace Google\Cloud\Datastream\V1\OracleSourceConfig\BinaryLogParser;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration to specify the Oracle directories to access the log files.
 *
 * Generated from protobuf message <code>google.cloud.datastream.v1.OracleSourceConfig.BinaryLogParser.LogFileDirectories</code>
 */
class LogFileDirectories extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Oracle directory for online logs.
     *
     * Generated from protobuf field <code>string online_log_directory = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $online_log_directory = '';
    /**
     * Required. Oracle directory for archived logs.
     *
     * Generated from protobuf field <code>string archived_log_directory = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $archived_log_directory = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $online_log_directory
     *           Required. Oracle directory for online logs.
     *     @type string $archived_log_directory
     *           Required. Oracle directory for archived logs.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datastream\V1\DatastreamResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Oracle directory for online logs.
     *
     * Generated from protobuf field <code>string online_log_directory = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getOnlineLogDirectory()
    {
        return $this->online_log_directory;
    }

    /**
     * Required. Oracle directory for online logs.
     *
     * Generated from protobuf field <code>string online_log_directory = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setOnlineLogDirectory($var)
    {
        GPBUtil::checkString($var, True);
        $this->online_log_directory = $var;

        return $this;
    }

    /**
     * Required. Oracle directory for archived logs.
     *
     * Generated from protobuf field <code>string archived_log_directory = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getArchivedLogDirectory()
    {
        return $this->archived_log_directory;
    }

    /**
     * Required. Oracle directory for archived logs.
     *
     * Generated from protobuf field <code>string archived_log_directory = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setArchivedLogDirectory($var)
    {
        GPBUtil::checkString($var, True);
        $this->archived_log_directory = $var;

        return $this;
    }

}

