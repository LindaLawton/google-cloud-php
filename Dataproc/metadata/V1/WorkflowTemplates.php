<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/workflow_templates.proto

namespace GPBMetadata\Google\Cloud\Dataproc\V1;

class WorkflowTemplates
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Dataproc\V1\Clusters::initOnce();
        \GPBMetadata\Google\Cloud\Dataproc\V1\Jobs::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�<
1google/cloud/dataproc/v1/workflow_templates.protogoogle.cloud.dataproc.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto\'google/cloud/dataproc/v1/clusters.proto#google/cloud/dataproc/v1/jobs.proto#google/longrunning/operations.protogoogle/protobuf/duration.protogoogle/protobuf/empty.protogoogle/protobuf/timestamp.proto"�
WorkflowTemplate
id (	B�A
name (	B�A
version (B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AK
labels (26.google.cloud.dataproc.v1.WorkflowTemplate.LabelsEntryB�AK
	placement (23.google.cloud.dataproc.v1.WorkflowTemplatePlacementB�A7
jobs (2$.google.cloud.dataproc.v1.OrderedJobB�AD

parameters	 (2+.google.cloud.dataproc.v1.TemplateParameterB�A3
dag_timeout
 (2.google.protobuf.DurationB�A-
LabelsEntry
key (	
value (	:8:��A�
(dataproc.googleapis.com/WorkflowTemplateIprojects/{project}/regions/{region}/workflowTemplates/{workflow_template}Mprojects/{project}/locations/{location}/workflowTemplates/{workflow_template} "�
WorkflowTemplatePlacementC
managed_cluster (2(.google.cloud.dataproc.v1.ManagedClusterH E
cluster_selector (2).google.cloud.dataproc.v1.ClusterSelectorH B
	placement"�
ManagedCluster
cluster_name (	B�A<
config (2\'.google.cloud.dataproc.v1.ClusterConfigB�AI
labels (24.google.cloud.dataproc.v1.ManagedCluster.LabelsEntryB�A-
LabelsEntry
key (	
value (	:8"�
ClusterSelector
zone (	B�AY
cluster_labels (2<.google.cloud.dataproc.v1.ClusterSelector.ClusterLabelsEntryB�A4
ClusterLabelsEntry
key (	
value (	:8"�

OrderedJob
step_id (	B�A>

hadoop_job (2#.google.cloud.dataproc.v1.HadoopJobB�AH <
	spark_job (2".google.cloud.dataproc.v1.SparkJobB�AH @
pyspark_job (2$.google.cloud.dataproc.v1.PySparkJobB�AH :
hive_job (2!.google.cloud.dataproc.v1.HiveJobB�AH 8
pig_job (2 .google.cloud.dataproc.v1.PigJobB�AH ?
spark_r_job (2#.google.cloud.dataproc.v1.SparkRJobB�AH C
spark_sql_job (2%.google.cloud.dataproc.v1.SparkSqlJobB�AH >

presto_job (2#.google.cloud.dataproc.v1.PrestoJobB�AH E
labels (20.google.cloud.dataproc.v1.OrderedJob.LabelsEntryB�A@

scheduling	 (2\'.google.cloud.dataproc.v1.JobSchedulingB�A"
prerequisite_step_ids
 (	B�A-
LabelsEntry
key (	
value (	:8B

job_type"�
TemplateParameter
name (	B�A
fields (	B�A
description (	B�AF

validation (2-.google.cloud.dataproc.v1.ParameterValidationB�A"�
ParameterValidation:
regex (2).google.cloud.dataproc.v1.RegexValidationH ;
values (2).google.cloud.dataproc.v1.ValueValidationH B
validation_type"\'
RegexValidation
regexes (	B�A"&
ValueValidation
values (	B�A"�
WorkflowMetadata
template (	B�A
version (B�AG
create_cluster (2*.google.cloud.dataproc.v1.ClusterOperationB�A;
graph (2\'.google.cloud.dataproc.v1.WorkflowGraphB�AG
delete_cluster (2*.google.cloud.dataproc.v1.ClusterOperationB�AD
state (20.google.cloud.dataproc.v1.WorkflowMetadata.StateB�A
cluster_name (	B�AN

parameters (2:.google.cloud.dataproc.v1.WorkflowMetadata.ParametersEntry3

start_time	 (2.google.protobuf.TimestampB�A1
end_time
 (2.google.protobuf.TimestampB�A
cluster_uuid (	B�A3
dag_timeout (2.google.protobuf.DurationB�A7
dag_start_time (2.google.protobuf.TimestampB�A5
dag_end_time (2.google.protobuf.TimestampB�A1
ParametersEntry
key (	
value (	:8"8
State
UNKNOWN 
PENDING
RUNNING
DONE"T
ClusterOperation
operation_id (	B�A
error (	B�A
done (B�A"K
WorkflowGraph:
nodes (2&.google.cloud.dataproc.v1.WorkflowNodeB�A"�
WorkflowNode
step_id (	B�A"
prerequisite_step_ids (	B�A
job_id (	B�AD
state (20.google.cloud.dataproc.v1.WorkflowNode.NodeStateB�A
error (	B�A"j
	NodeState
NODE_STATE_UNSPECIFIED 
BLOCKED
RUNNABLE
RUNNING
	COMPLETED

FAILED"�
CreateWorkflowTemplateRequest@
parent (	B0�A�A*(dataproc.googleapis.com/WorkflowTemplateA
template (2*.google.cloud.dataproc.v1.WorkflowTemplateB�A"r
GetWorkflowTemplateRequest>
name (	B0�A�A*
(dataproc.googleapis.com/WorkflowTemplate
version (B�A"�
"InstantiateWorkflowTemplateRequest>
name (	B0�A�A*
(dataproc.googleapis.com/WorkflowTemplate
version (B�A

request_id (	B�Ae

parameters (2L.google.cloud.dataproc.v1.InstantiateWorkflowTemplateRequest.ParametersEntryB�A1
ParametersEntry
key (	
value (	:8"�
(InstantiateInlineWorkflowTemplateRequest@
parent (	B0�A�A*(dataproc.googleapis.com/WorkflowTemplateA
template (2*.google.cloud.dataproc.v1.WorkflowTemplateB�A

request_id (	B�A"b
UpdateWorkflowTemplateRequestA
template (2*.google.cloud.dataproc.v1.WorkflowTemplateB�A"�
ListWorkflowTemplatesRequest@
parent (	B0�A�A*(dataproc.googleapis.com/WorkflowTemplate
	page_size (B�A

page_token (	B�A"�
ListWorkflowTemplatesResponseB
	templates (2*.google.cloud.dataproc.v1.WorkflowTemplateB�A
next_page_token (	B�A"u
DeleteWorkflowTemplateRequest>
name (	B0�A�A*
(dataproc.googleapis.com/WorkflowTemplate
version (B�A2�
WorkflowTemplateService�
CreateWorkflowTemplate7.google.cloud.dataproc.v1.CreateWorkflowTemplateRequest*.google.cloud.dataproc.v1.WorkflowTemplate"�����"5/v1/{parent=projects/*/locations/*}/workflowTemplates:templateZ?"3/v1/{parent=projects/*/regions/*}/workflowTemplates:template�Aparent,template�
GetWorkflowTemplate4.google.cloud.dataproc.v1.GetWorkflowTemplateRequest*.google.cloud.dataproc.v1.WorkflowTemplate"{���n5/v1/{name=projects/*/locations/*/workflowTemplates/*}Z53/v1/{name=projects/*/regions/*/workflowTemplates/*}�Aname�
InstantiateWorkflowTemplate<.google.cloud.dataproc.v1.InstantiateWorkflowTemplateRequest.google.longrunning.Operation"�����"A/v1/{name=projects/*/locations/*/workflowTemplates/*}:instantiate:*ZD"?/v1/{name=projects/*/regions/*/workflowTemplates/*}:instantiate:*�Aname�Aname,parameters�A)
google.protobuf.EmptyWorkflowMetadata�
!InstantiateInlineWorkflowTemplateB.google.cloud.dataproc.v1.InstantiateInlineWorkflowTemplateRequest.google.longrunning.Operation"�����"G/v1/{parent=projects/*/locations/*}/workflowTemplates:instantiateInline:templateZQ"E/v1/{parent=projects/*/regions/*}/workflowTemplates:instantiateInline:template�Aparent,template�A)
google.protobuf.EmptyWorkflowMetadata�
UpdateWorkflowTemplate7.google.cloud.dataproc.v1.UpdateWorkflowTemplateRequest*.google.cloud.dataproc.v1.WorkflowTemplate"�����>/v1/{template.name=projects/*/locations/*/workflowTemplates/*}:templateZH</v1/{template.name=projects/*/regions/*/workflowTemplates/*}:template�Atemplate�
ListWorkflowTemplates6.google.cloud.dataproc.v1.ListWorkflowTemplatesRequest7.google.cloud.dataproc.v1.ListWorkflowTemplatesResponse"}���n5/v1/{parent=projects/*/locations/*}/workflowTemplatesZ53/v1/{parent=projects/*/regions/*}/workflowTemplates�Aparent�
DeleteWorkflowTemplate7.google.cloud.dataproc.v1.DeleteWorkflowTemplateRequest.google.protobuf.Empty"{���n*5/v1/{name=projects/*/locations/*/workflowTemplates/*}Z5*3/v1/{name=projects/*/regions/*/workflowTemplates/*}�AnameK�Adataproc.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformBu
com.google.cloud.dataproc.v1BWorkflowTemplatesProtoPZ;cloud.google.com/go/dataproc/v2/apiv1/dataprocpb;dataprocpbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

