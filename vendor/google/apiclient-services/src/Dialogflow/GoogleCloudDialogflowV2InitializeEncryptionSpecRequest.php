<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Dialogflow;

class GoogleCloudDialogflowV2InitializeEncryptionSpecRequest extends \Google\Model
{
  protected $encryptionSpecType = GoogleCloudDialogflowV2EncryptionSpec::class;
  protected $encryptionSpecDataType = '';

  /**
   * @param GoogleCloudDialogflowV2EncryptionSpec
   */
  public function setEncryptionSpec(GoogleCloudDialogflowV2EncryptionSpec $encryptionSpec)
  {
    $this->encryptionSpec = $encryptionSpec;
  }
  /**
   * @return GoogleCloudDialogflowV2EncryptionSpec
   */
  public function getEncryptionSpec()
  {
    return $this->encryptionSpec;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDialogflowV2InitializeEncryptionSpecRequest::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2InitializeEncryptionSpecRequest');
