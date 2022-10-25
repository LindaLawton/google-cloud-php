<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/batch/v1/job.proto

namespace Google\Cloud\Batch\V1\AllocationPolicy;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A new or an existing persistent disk or a local ssd attached to a VM
 * instance.
 *
 * Generated from protobuf message <code>google.cloud.batch.v1.AllocationPolicy.AttachedDisk</code>
 */
class AttachedDisk extends \Google\Protobuf\Internal\Message
{
    /**
     * Device name that the guest operating system will see.
     * It is used by Runnable.volumes field to mount disks. So please specify
     * the device_name if you want Batch to help mount the disk, and it should
     * match the device_name field in volumes.
     *
     * Generated from protobuf field <code>string device_name = 3;</code>
     */
    private $device_name = '';
    protected $attached;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Batch\V1\AllocationPolicy\Disk $new_disk
     *     @type string $existing_disk
     *           Name of an existing PD.
     *     @type string $device_name
     *           Device name that the guest operating system will see.
     *           It is used by Runnable.volumes field to mount disks. So please specify
     *           the device_name if you want Batch to help mount the disk, and it should
     *           match the device_name field in volumes.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Batch\V1\Job::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.batch.v1.AllocationPolicy.Disk new_disk = 1;</code>
     * @return \Google\Cloud\Batch\V1\AllocationPolicy\Disk|null
     */
    public function getNewDisk()
    {
        return $this->readOneof(1);
    }

    public function hasNewDisk()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.batch.v1.AllocationPolicy.Disk new_disk = 1;</code>
     * @param \Google\Cloud\Batch\V1\AllocationPolicy\Disk $var
     * @return $this
     */
    public function setNewDisk($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Batch\V1\AllocationPolicy\Disk::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Name of an existing PD.
     *
     * Generated from protobuf field <code>string existing_disk = 2;</code>
     * @return string
     */
    public function getExistingDisk()
    {
        return $this->readOneof(2);
    }

    public function hasExistingDisk()
    {
        return $this->hasOneof(2);
    }

    /**
     * Name of an existing PD.
     *
     * Generated from protobuf field <code>string existing_disk = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setExistingDisk($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Device name that the guest operating system will see.
     * It is used by Runnable.volumes field to mount disks. So please specify
     * the device_name if you want Batch to help mount the disk, and it should
     * match the device_name field in volumes.
     *
     * Generated from protobuf field <code>string device_name = 3;</code>
     * @return string
     */
    public function getDeviceName()
    {
        return $this->device_name;
    }

    /**
     * Device name that the guest operating system will see.
     * It is used by Runnable.volumes field to mount disks. So please specify
     * the device_name if you want Batch to help mount the disk, and it should
     * match the device_name field in volumes.
     *
     * Generated from protobuf field <code>string device_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDeviceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->device_name = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getAttached()
    {
        return $this->whichOneof("attached");
    }

}


