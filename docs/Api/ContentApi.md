# Thip\ContentApi

All URIs are relative to *http://http:#ENDPOINT#*

Method | HTTP request | Description
------------- | ------------- | -------------
[**publicationServiceApplicationControllerCourseApiControllerContent**](ContentApi.md#publicationServiceApplicationControllerCourseApiControllerContent) | **GET** /api/v1/content/course/{course} | Get content of a publication. The content can be queried at any level. With a flag you can ask to include the children (content tree). With a flag you can chose to include the content itself (if you have rights to do so).
[**publicationServiceApplicationControllerCourseApiControllerFilter**](ContentApi.md#publicationServiceApplicationControllerCourseApiControllerFilter) | **GET** /api/v1/content/course/{course}/filter | Get specific content from a publication, filtered with several optional filters. Choose at least one filter, otherwise this api does nothing.
[**publicationServiceApplicationControllerCourseApiControllerXml**](ContentApi.md#publicationServiceApplicationControllerCourseApiControllerXml) | **GET** /api/v1/content/course/{course}/xml | Get Edition XML of the newest publication in a stream.



## publicationServiceApplicationControllerCourseApiControllerContent

> \Thip\Model\DigitalResource[] publicationServiceApplicationControllerCourseApiControllerContent($course, $include_children, $include_content, $content_as_html, $content_identifier, $version, $include_versions, $preview)

Get content of a publication. The content can be queried at any level. With a flag you can ask to include the children (content tree). With a flag you can chose to include the content itself (if you have rights to do so).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Thip\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Thip\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$course = 'course_example'; // string | The StreamCode of the course to find the content in (see /api/v1/course)
$include_children = false; // bool | include all child DigitalResources
$include_content = false; // bool | include the content of each DigitalResource
$content_as_html = false; // bool | include the content of each DigitalResource as HTML (automatically enabled includeContent)
$content_identifier = 'content_identifier_example'; // string | Unique content identifier for specific element
$version = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | find content before specified date/time
$include_versions = false; // bool | find all different versions of a specific content element
$preview = false; // bool | show preview version instead of the published version

try {
    $result = $apiInstance->publicationServiceApplicationControllerCourseApiControllerContent($course, $include_children, $include_content, $content_as_html, $content_identifier, $version, $include_versions, $preview);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->publicationServiceApplicationControllerCourseApiControllerContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course** | **string**| The StreamCode of the course to find the content in (see /api/v1/course) |
 **include_children** | **bool**| include all child DigitalResources | [optional] [default to false]
 **include_content** | **bool**| include the content of each DigitalResource | [optional] [default to false]
 **content_as_html** | **bool**| include the content of each DigitalResource as HTML (automatically enabled includeContent) | [optional] [default to false]
 **content_identifier** | **string**| Unique content identifier for specific element | [optional]
 **version** | **\DateTime**| find content before specified date/time | [optional]
 **include_versions** | **bool**| find all different versions of a specific content element | [optional] [default to false]
 **preview** | **bool**| show preview version instead of the published version | [optional] [default to false]

### Return type

[**\Thip\Model\DigitalResource[]**](../Model/DigitalResource.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## publicationServiceApplicationControllerCourseApiControllerFilter

> \Thip\Model\DigitalResource[] publicationServiceApplicationControllerCourseApiControllerFilter($course, $preview, $include_content, $content_as_html, $filter_type, $filter_typical_learning_time, $filter_learning_goal, $filter_working_process, $filter_learning_process, $filter_learning_level)

Get specific content from a publication, filtered with several optional filters. Choose at least one filter, otherwise this api does nothing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Thip\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Thip\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$course = 'course_example'; // string | The StreamCode of the course to find the content in (see /api/v1/course)
$preview = false; // bool | show preview version instead of the published version
$include_content = false; // bool | include the content of each DigitalResource
$content_as_html = false; // bool | include the content of each DigitalResource as HTML (automatically enabled includeContent)
$filter_type = array('filter_type_example'); // string[] | Filter on type, ex. question, chapter or paragraph
$filter_typical_learning_time = array('filter_typical_learning_time_example'); // string[] | Filter on typical learning time, ex. PT1M
$filter_learning_goal = array('filter_learning_goal_example'); // string[] | Filter on the learning goal, ex. Engels
$filter_working_process = array('filter_working_process_example'); // string[] | Filter on the lam cell, workingProcess axis
$filter_learning_process = array('filter_learning_process_example'); // string[] | Filter on the lan cell, learningProcess axis
$filter_learning_level = array('filter_learning_level_example'); // string[] | Filter on the learning level, ex. VO-Onderbouw + K

try {
    $result = $apiInstance->publicationServiceApplicationControllerCourseApiControllerFilter($course, $preview, $include_content, $content_as_html, $filter_type, $filter_typical_learning_time, $filter_learning_goal, $filter_working_process, $filter_learning_process, $filter_learning_level);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->publicationServiceApplicationControllerCourseApiControllerFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course** | **string**| The StreamCode of the course to find the content in (see /api/v1/course) |
 **preview** | **bool**| show preview version instead of the published version | [optional] [default to false]
 **include_content** | **bool**| include the content of each DigitalResource | [optional] [default to false]
 **content_as_html** | **bool**| include the content of each DigitalResource as HTML (automatically enabled includeContent) | [optional] [default to false]
 **filter_type** | [**string[]**](../Model/string.md)| Filter on type, ex. question, chapter or paragraph | [optional]
 **filter_typical_learning_time** | [**string[]**](../Model/string.md)| Filter on typical learning time, ex. PT1M | [optional]
 **filter_learning_goal** | [**string[]**](../Model/string.md)| Filter on the learning goal, ex. Engels | [optional]
 **filter_working_process** | [**string[]**](../Model/string.md)| Filter on the lam cell, workingProcess axis | [optional]
 **filter_learning_process** | [**string[]**](../Model/string.md)| Filter on the lan cell, learningProcess axis | [optional]
 **filter_learning_level** | [**string[]**](../Model/string.md)| Filter on the learning level, ex. VO-Onderbouw + K | [optional]

### Return type

[**\Thip\Model\DigitalResource[]**](../Model/DigitalResource.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## publicationServiceApplicationControllerCourseApiControllerXml

> string publicationServiceApplicationControllerCourseApiControllerXml($course, $preview, $version)

Get Edition XML of the newest publication in a stream.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Thip\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Thip\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$course = 'course_example'; // string | The StreamCode of the course to find the content in (see /api/v1/course)
$preview = false; // bool | show preview version instead of the published version
$version = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | find content before specified date/time

try {
    $result = $apiInstance->publicationServiceApplicationControllerCourseApiControllerXml($course, $preview, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->publicationServiceApplicationControllerCourseApiControllerXml: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course** | **string**| The StreamCode of the course to find the content in (see /api/v1/course) |
 **preview** | **bool**| show preview version instead of the published version | [optional] [default to false]
 **version** | **\DateTime**| find content before specified date/time | [optional]

### Return type

**string**

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

