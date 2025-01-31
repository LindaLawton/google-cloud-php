<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/baremetalsolution/v2/provisioning.proto

namespace Google\Cloud\BareMetalSolution\V2\ServerNetworkTemplate;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Logical interface.
 *
 * Generated from protobuf message <code>google.cloud.baremetalsolution.v2.ServerNetworkTemplate.LogicalInterface</code>
 */
class LogicalInterface extends \Google\Protobuf\Internal\Message
{
    /**
     * Interface name.
     * This is not a globally unique identifier.
     * Name is unique only inside the ServerNetworkTemplate. This is of syntax
     * <bond><interface_type_index><bond_mode> or <nic><interface_type_index>
     * and forms part of the network template name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Interface type.
     *
     * Generated from protobuf field <code>.google.cloud.baremetalsolution.v2.ServerNetworkTemplate.LogicalInterface.InterfaceType type = 2;</code>
     */
    private $type = 0;
    /**
     * If true, interface must have network connected.
     *
     * Generated from protobuf field <code>bool required = 3;</code>
     */
    private $required = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Interface name.
     *           This is not a globally unique identifier.
     *           Name is unique only inside the ServerNetworkTemplate. This is of syntax
     *           <bond><interface_type_index><bond_mode> or <nic><interface_type_index>
     *           and forms part of the network template name.
     *     @type int $type
     *           Interface type.
     *     @type bool $required
     *           If true, interface must have network connected.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Baremetalsolution\V2\Provisioning::initOnce();
        parent::__construct($data);
    }

    /**
     * Interface name.
     * This is not a globally unique identifier.
     * Name is unique only inside the ServerNetworkTemplate. This is of syntax
     * <bond><interface_type_index><bond_mode> or <nic><interface_type_index>
     * and forms part of the network template name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Interface name.
     * This is not a globally unique identifier.
     * Name is unique only inside the ServerNetworkTemplate. This is of syntax
     * <bond><interface_type_index><bond_mode> or <nic><interface_type_index>
     * and forms part of the network template name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Interface type.
     *
     * Generated from protobuf field <code>.google.cloud.baremetalsolution.v2.ServerNetworkTemplate.LogicalInterface.InterfaceType type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Interface type.
     *
     * Generated from protobuf field <code>.google.cloud.baremetalsolution.v2.ServerNetworkTemplate.LogicalInterface.InterfaceType type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\BareMetalSolution\V2\ServerNetworkTemplate\LogicalInterface\InterfaceType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * If true, interface must have network connected.
     *
     * Generated from protobuf field <code>bool required = 3;</code>
     * @return bool
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * If true, interface must have network connected.
     *
     * Generated from protobuf field <code>bool required = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setRequired($var)
    {
        GPBUtil::checkBool($var);
        $this->required = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LogicalInterface::class, \Google\Cloud\BareMetalSolution\V2\ServerNetworkTemplate_LogicalInterface::class);

