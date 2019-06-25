# # DigitalResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**content_identifier** | **string** | The content identifier of the digital resource. | [optional] 
**thed_content_identifier** | **string** | The content identifier of the digital resource. | [optional] 
**digital_resource_type** | **string** | Type of digital content. | [optional] 
**language** | **string** | The language of the content. | [optional] 
**intendedend_user_role** | **string** | The intendedendUserRole. | [optional] 
**typical_learning_time** | **string** | The typicallearningtime. | [optional] 
**learning_level** | **string** | The user learning level. | [optional] 
**lam_cells** | [**\Thip\Model\LamCellRef[]**](LamCellRef.md) | Smart metadata. | [optional] 
**title** | **string** | the title of the content. | [optional] 
**short_title** | **string** | the short title of the content. | [optional] 
**label** | **string** | The navigation label. | [optional] 
**position** | **int** |  | [optional] 
**number** | **string** | The number label of the content. | [optional] 
**background_image** | **string** | The background image. | [optional] 
**parent** | [**object**](.md) | Single parent DigitalResource. | [optional] 
**children** | [**\Thip\Model\DigitalResource[]**](DigitalResource.md) | All underlying digital resources. | [optional] 
**related_digital_resources** | [**\Thip\Model\DigitalResourceRef[]**](DigitalResourceRef.md) | The digital resources that this digital resource refers to. | [optional] 
**terms_refs** | [**\Thip\Model\TermRef[]**](TermRef.md) | The terms that this digital resource refers to. | [optional] 
**keywords** | **string[]** | The prolog/topicmeta Trefwoorden (&#x3D;keywords) as a simple array of strings. | [optional] 
**template** | **string** | Template for page display, ex. \&quot;1-wide\&quot;. | [optional] 
**content** | **string** | Content self in either xml or html. | [optional] 
**assets** | **object** | Array of ThamIds. | [optional] 
**methods** | **object** | Array of edition methods related to this DigitalResource. | [optional] 
**thiemo_keywords** | **object** | Array of keywords (strings) for thiemo. | [optional] 
**thiemo_tags** | **object** | Array of tags (strings) for thiemo. | [optional] 
**thiemo_subject** | **string** |  | [optional] 
**thiemo_method** | **string** |  | [optional] 
**thiemo_year** | **string** |  | [optional] 
**thiemo_schooltas_isbn** | **string** |  | [optional] 
**thiemo_schooltas_page** | **string** |  | [optional] 
**thiemo_content_type** | **string** |  | [optional] 
**thiemo_is_locked** | **bool** |  | [optional] 
**thiemo_source_logo** | **string** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


