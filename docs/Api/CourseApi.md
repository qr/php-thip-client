# Thip\CourseApi

All URIs are relative to *http://http:#ENDPOINT#*

Method | HTTP request | Description
------------- | ------------- | -------------
[**publicationServiceApplicationControllerCourseApiControllerIndexAction**](CourseApi.md#publicationServiceApplicationControllerCourseApiControllerIndexAction) | **GET** /api/v1/course | This call can be used to get the list of available courses for this user
[**publicationServiceApplicationControllerSubscriptionApiControllerCdelete**](CourseApi.md#publicationServiceApplicationControllerSubscriptionApiControllerCdelete) | **DELETE** /api/v1/course/changes/subscribe | Unsubscribe all callbacks
[**publicationServiceApplicationControllerSubscriptionApiControllerCget**](CourseApi.md#publicationServiceApplicationControllerSubscriptionApiControllerCget) | **GET** /api/v1/course/changes/subscribe | Get all callbacks
[**publicationServiceApplicationControllerSubscriptionApiControllerDelete**](CourseApi.md#publicationServiceApplicationControllerSubscriptionApiControllerDelete) | **DELETE** /api/v1/course/changes/subscribe/{subscription} | Get specific callback by subscriptionId
[**publicationServiceApplicationControllerSubscriptionApiControllerGet**](CourseApi.md#publicationServiceApplicationControllerSubscriptionApiControllerGet) | **GET** /api/v1/course/changes/subscribe/{subscription} | Get specific callback by subscriptionId
[**publicationServiceApplicationControllerSubscriptionApiControllerPost**](CourseApi.md#publicationServiceApplicationControllerSubscriptionApiControllerPost) | **POST** /api/v1/course/changes/subscribe | Subscribes a client to receive course change notifications



## publicationServiceApplicationControllerCourseApiControllerIndexAction

> \Thip\Model\Course[] publicationServiceApplicationControllerCourseApiControllerIndexAction()

This call can be used to get the list of available courses for this user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Thip\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Thip\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->publicationServiceApplicationControllerCourseApiControllerIndexAction();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->publicationServiceApplicationControllerCourseApiControllerIndexAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Thip\Model\Course[]**](../Model/Course.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## publicationServiceApplicationControllerSubscriptionApiControllerCdelete

> publicationServiceApplicationControllerSubscriptionApiControllerCdelete()

Unsubscribe all callbacks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Thip\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->publicationServiceApplicationControllerSubscriptionApiControllerCdelete();
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->publicationServiceApplicationControllerSubscriptionApiControllerCdelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## publicationServiceApplicationControllerSubscriptionApiControllerCget

> \Thip\Model\Subscription[] publicationServiceApplicationControllerSubscriptionApiControllerCget()

Get all callbacks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Thip\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Thip\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->publicationServiceApplicationControllerSubscriptionApiControllerCget();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->publicationServiceApplicationControllerSubscriptionApiControllerCget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Thip\Model\Subscription[]**](../Model/Subscription.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## publicationServiceApplicationControllerSubscriptionApiControllerDelete

> publicationServiceApplicationControllerSubscriptionApiControllerDelete($subscription)

Get specific callback by subscriptionId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Thip\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Thip\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription = 'subscription_example'; // string | The subscriptionId of the specific subscription you want to delete

try {
    $apiInstance->publicationServiceApplicationControllerSubscriptionApiControllerDelete($subscription);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->publicationServiceApplicationControllerSubscriptionApiControllerDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription** | **string**| The subscriptionId of the specific subscription you want to delete |

### Return type

void (empty response body)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## publicationServiceApplicationControllerSubscriptionApiControllerGet

> \Thip\Model\Subscription publicationServiceApplicationControllerSubscriptionApiControllerGet($subscription)

Get specific callback by subscriptionId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Thip\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Thip\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription = 'subscription_example'; // string | The subscriptionId of the specific subscription you want to get

try {
    $result = $apiInstance->publicationServiceApplicationControllerSubscriptionApiControllerGet($subscription);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->publicationServiceApplicationControllerSubscriptionApiControllerGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription** | **string**| The subscriptionId of the specific subscription you want to get |

### Return type

[**\Thip\Model\Subscription**](../Model/Subscription.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## publicationServiceApplicationControllerSubscriptionApiControllerPost

> \Thip\Model\Subscription publicationServiceApplicationControllerSubscriptionApiControllerPost($inline_object)

Subscribes a client to receive course change notifications

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Thip\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Thip\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object = new \Thip\Model\InlineObject(); // \Thip\Model\InlineObject | 

try {
    $result = $apiInstance->publicationServiceApplicationControllerSubscriptionApiControllerPost($inline_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->publicationServiceApplicationControllerSubscriptionApiControllerPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object** | [**\Thip\Model\InlineObject**](../Model/InlineObject.md)|  |

### Return type

[**\Thip\Model\Subscription**](../Model/Subscription.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

