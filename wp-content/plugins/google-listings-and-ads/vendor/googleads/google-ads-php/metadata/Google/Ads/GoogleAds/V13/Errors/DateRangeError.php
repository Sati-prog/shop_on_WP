<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/errors/date_range_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V13\Errors;

class DateRangeError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
6google/ads/googleads/v13/errors/date_range_error.protogoogle.ads.googleads.v13.errors"�
DateRangeErrorEnum"�
DateRangeError
UNSPECIFIED 
UNKNOWN
INVALID_DATE
START_DATE_AFTER_END_DATE
CANNOT_SET_DATE_TO_PAST 
AFTER_MAXIMUM_ALLOWABLE_DATE/
+CANNOT_MODIFY_START_DATE_IF_ALREADY_STARTEDB�
#com.google.ads.googleads.v13.errorsBDateRangeErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v13/errors;errors�GAA�Google.Ads.GoogleAds.V13.Errors�Google\\Ads\\GoogleAds\\V13\\Errors�#Google::Ads::GoogleAds::V13::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

