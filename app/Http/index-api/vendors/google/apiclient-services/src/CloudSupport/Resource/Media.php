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

namespace Google\Service\CloudSupport\Resource;

use Google\Service\CloudSupport\Attachment;
use Google\Service\CloudSupport\CreateAttachmentRequest;
use Google\Service\CloudSupport\Media as MediaModel;

/**
 * The "media" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudsupportService = new Google\Service\CloudSupport(...);
 *   $media = $cloudsupportService->media;
 *  </code>
 */
class Media extends \Google\Service\Resource
{
  /**
   * Download a file attachment on a case. Note: HTTP requests must append
   * "?alt=media" to the URL. Here is an example of calling this endpoint using
   * cURL: ```shell name="projects/some-
   * project/cases/43594844/attachments/0674M00000WijAnZAJ" curl \ --header
   * "Authorization: Bearer $(gcloud auth print-access-token)" \
   * "https://cloudsupport.googleapis.com/v2/$name:download?alt=media" ```
   * (media.download)
   *
   * @param string $name The resource name of the attachment to be downloaded.
   * @param array $optParams Optional parameters.
   * @return MediaModel
   */
  public function download($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('download', [$params], MediaModel::class);
  }
  /**
   * Create a file attachment on a case or Cloud resource. The attachment object
   * must have the following fields set: filename. Here is an example of calling
   * this endpoint using cURL: ```shell echo "This text is in a file I'm uploading
   * using CSAPI." \ > "./example_file.txt" case="projects/some-
   * project/cases/43594844" curl \ --header "Authorization: Bearer $(gcloud auth
   * print-access-token)" \ --data-binary @"./example_file.txt" \ "https://cloudsu
   * pport.googleapis.com/upload/v2beta/$case/attachments?attachment.filename=uplo
   * aded_via_curl.txt" ``` (media.upload)
   *
   * @param string $parent Required. The resource name of the case (or case
   * parent) to which the attachment should be attached.
   * @param CreateAttachmentRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Attachment
   */
  public function upload($parent, CreateAttachmentRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('upload', [$params], Attachment::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Media::class, 'Google_Service_CloudSupport_Resource_Media');
