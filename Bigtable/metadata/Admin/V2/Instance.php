<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/instance.proto

namespace GPBMetadata\Google\Bigtable\Admin\V2;

class Instance
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Bigtable\Admin\V2\Common::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
\'google/bigtable/admin/v2/instance.protogoogle.bigtable.admin.v2google/api/resource.proto%google/bigtable/admin/v2/common.proto"�
Instance
name (	B�A
display_name (	B�A7
state (2(.google.bigtable.admin.v2.Instance.State5
type (2\'.google.bigtable.admin.v2.Instance.Type>
labels (2..google.bigtable.admin.v2.Instance.LabelsEntry-
LabelsEntry
key (	
value (	:8"5
State
STATE_NOT_KNOWN 	
READY
CREATING"=
Type
TYPE_UNSPECIFIED 

PRODUCTION
DEVELOPMENT:N�AK
 bigtable.googleapis.com/Instance\'projects/{project}/instances/{instance}"�
Cluster
name (	B�A8
location (	B&�A#
!locations.googleapis.com/Location;
state (2\'.google.bigtable.admin.v2.Cluster.StateB�A
serve_nodes (B�AC
default_storage_type (2%.google.bigtable.admin.v2.StorageTypeR
encryption_config (22.google.bigtable.admin.v2.Cluster.EncryptionConfigB�AP
EncryptionConfig<
kms_key_name (	B&�A#
!cloudkms.googleapis.com/CryptoKey"Q
State
STATE_NOT_KNOWN 	
READY
CREATING
RESIZING
DISABLED:`�A]
bigtable.googleapis.com/Cluster:projects/{project}/instances/{instance}/clusters/{cluster}"�

AppProfile
name (	
etag (	
description (	g
multi_cluster_routing_use_any (2>.google.bigtable.admin.v2.AppProfile.MultiClusterRoutingUseAnyH [
single_cluster_routing (29.google.bigtable.admin.v2.AppProfile.SingleClusterRoutingH 0
MultiClusterRoutingUseAny
cluster_ids (	N
SingleClusterRouting

cluster_id (	"
allow_transactional_writes (:j�Ag
"bigtable.googleapis.com/AppProfileAprojects/{project}/instances/{instance}/appProfiles/{app_profile}B
routing_policyB�
com.google.bigtable.admin.v2BInstanceProtoPZ=google.golang.org/genproto/googleapis/bigtable/admin/v2;admin�Google.Cloud.Bigtable.Admin.V2�Google\\Cloud\\Bigtable\\Admin\\V2�"Google::Cloud::Bigtable::Admin::V2�Ax
!cloudkms.googleapis.com/CryptoKeySprojects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

