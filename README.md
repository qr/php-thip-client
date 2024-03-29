# ThipClient

Concept of an API to get the content from the publication service.

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 0.8.5
- Build package: org.openapitools.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/qr/php-thip-client.git"
    }
  ],
  "require": {
    "qr/php-thip-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/ThipClient/vendor/autoload.php');
```

## Tests

To run the unit tests:

```bash
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *http://http:#ENDPOINT#*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ContentApi* | [**publicationServiceApplicationControllerCourseApiControllerContent**](docs/Api/ContentApi.md#publicationserviceapplicationcontrollercourseapicontrollercontent) | **GET** /api/v1/content/course/{course} | Get content of a publication. The content can be queried at any level. With a flag you can ask to include the children (content tree). With a flag you can chose to include the content itself (if you have rights to do so).
*ContentApi* | [**publicationServiceApplicationControllerCourseApiControllerFilter**](docs/Api/ContentApi.md#publicationserviceapplicationcontrollercourseapicontrollerfilter) | **GET** /api/v1/content/course/{course}/filter | Get specific content from a publication, filtered with several optional filters. Choose at least one filter, otherwise this api does nothing.
*ContentApi* | [**publicationServiceApplicationControllerCourseApiControllerXml**](docs/Api/ContentApi.md#publicationserviceapplicationcontrollercourseapicontrollerxml) | **GET** /api/v1/content/course/{course}/xml | Get Edition XML of the newest publication in a stream.
*CourseApi* | [**publicationServiceApplicationControllerCourseApiControllerIndexAction**](docs/Api/CourseApi.md#publicationserviceapplicationcontrollercourseapicontrollerindexaction) | **GET** /api/v1/course | This call can be used to get the list of available courses for this user
*CourseApi* | [**publicationServiceApplicationControllerSubscriptionApiControllerCdelete**](docs/Api/CourseApi.md#publicationserviceapplicationcontrollersubscriptionapicontrollercdelete) | **DELETE** /api/v1/course/changes/subscribe | Unsubscribe all callbacks
*CourseApi* | [**publicationServiceApplicationControllerSubscriptionApiControllerCget**](docs/Api/CourseApi.md#publicationserviceapplicationcontrollersubscriptionapicontrollercget) | **GET** /api/v1/course/changes/subscribe | Get all callbacks
*CourseApi* | [**publicationServiceApplicationControllerSubscriptionApiControllerDelete**](docs/Api/CourseApi.md#publicationserviceapplicationcontrollersubscriptionapicontrollerdelete) | **DELETE** /api/v1/course/changes/subscribe/{subscription} | Get specific callback by subscriptionId
*CourseApi* | [**publicationServiceApplicationControllerSubscriptionApiControllerGet**](docs/Api/CourseApi.md#publicationserviceapplicationcontrollersubscriptionapicontrollerget) | **GET** /api/v1/course/changes/subscribe/{subscription} | Get specific callback by subscriptionId
*CourseApi* | [**publicationServiceApplicationControllerSubscriptionApiControllerPost**](docs/Api/CourseApi.md#publicationserviceapplicationcontrollersubscriptionapicontrollerpost) | **POST** /api/v1/course/changes/subscribe | Subscribes a client to receive course change notifications


## Documentation For Models

 - [Course](docs/Model/Course.md)
 - [DigitalResource](docs/Model/DigitalResource.md)
 - [DigitalResourceRef](docs/Model/DigitalResourceRef.md)
 - [FormError](docs/Model/FormError.md)
 - [InlineObject](docs/Model/InlineObject.md)
 - [LamCellRef](docs/Model/LamCellRef.md)
 - [PlatformAccess](docs/Model/PlatformAccess.md)
 - [Subscription](docs/Model/Subscription.md)
 - [TermRef](docs/Model/TermRef.md)
 - [TermsGroup](docs/Model/TermsGroup.md)
 - [TermsItem](docs/Model/TermsItem.md)


## Documentation For Authorization



## oauth


- **Type**: OAuth
- **Flow**: password
- **Authorization URL**: 
- **Scopes**: N/A


## Author



