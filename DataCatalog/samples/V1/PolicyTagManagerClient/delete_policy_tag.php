<?php
/*
 * Copyright 2022 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START datacatalog_v1_generated_PolicyTagManager_DeletePolicyTag_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\DataCatalog\V1\PolicyTagManagerClient;

/**
 * Deletes a policy tag together with the following:
 *
 * * All of its descendant policy tags, if any
 * * Policies associated with the policy tag and its descendants
 * * References from BigQuery table schema of the policy tag and its
 * descendants
 *
 * @param string $formattedName Resource name of the policy tag to delete.
 *
 *                              Note: All of its descendant policy tags are also deleted. Please see
 *                              {@see PolicyTagManagerClient::policyTagName()} for help formatting this field.
 */
function delete_policy_tag_sample(string $formattedName): void
{
    // Create a client.
    $policyTagManagerClient = new PolicyTagManagerClient();

    // Call the API and handle any network failures.
    try {
        $policyTagManagerClient->deletePolicyTag($formattedName);
        printf('Call completed successfully.' . PHP_EOL);
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedName = PolicyTagManagerClient::policyTagName(
        '[PROJECT]',
        '[LOCATION]',
        '[TAXONOMY]',
        '[POLICY_TAG]'
    );

    delete_policy_tag_sample($formattedName);
}
// [END datacatalog_v1_generated_PolicyTagManager_DeletePolicyTag_sync]
