<?php

/**
 * Header Selector
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 * @link      https://tatum.io/
 *
 * NOTE: This class is auto generated by tatum.io
 * Do not edit this file manually
 */

namespace Tatum\Sdk;

/**
 * Header Selector
 */
class HeaderSelector {
    // Headers
    const HEADER_CONTENT_TYPE = "Content-Type";
    const HEADER_ACCEPT = "Accept";

    /**
     * Select the Accept and Content-Type headers
     *
     * @param string[] $accept       (optional) Accept headers
     * @param string[] $contentTypes (optional) Content type headers
     * @return array<string, string>
     */
    public function selectHeaders(array $accept = [], array $contentTypes = []): array {
        $headers = [
            self::HEADER_CONTENT_TYPE => $this->_selectContentTypeHeader($contentTypes)
        ];

        if (strlen($acceptString = $this->_selectAcceptHeader($accept))) {
            $headers[self::HEADER_ACCEPT] = $acceptString;
        }

        return $headers;
    }

    /**
     * Selecte the Accept headers for multi-part form data
     *
     * @param string[] $accept (optional) Accept headers
     * @return array<string, string>
     */
    public function selectHeadersForMultipart(array $accept = []): array {
        $headers = [];

        if (strlen($acceptString = $this->_selectAcceptHeader($accept))) {
            $headers[self::HEADER_ACCEPT] = $acceptString;
        }

        return $headers;
    }

    /**
     * Return the header 'Accept' based on an array of Accept provided
     *
     * @param string[] $accept Array of headers
     * @return string Accept (e.g. "application/json")
     */
    protected function _selectAcceptHeader(array $accept): string {
        $result = "";
        $accept = $this->_cleanUp($accept);

        do {
            if (!count($accept)) {
                break;
            }

            if ($jsonAccept = preg_grep('%^(?:application\/json|[^;\/\s]+\/[^;\/\s]+\+json)(?:\s*;.*)?$%si', $accept)) {
                $result = implode(",", $jsonAccept);
                break;
            }

            $result = implode(",", $accept);
            
        } while (false);

        return $result;
    }

    /**
     * Return the content type header
     *
     * @param string[] $contentType Array of content-type
     * @return string Content-Type (e.g. "application/json")
     */
    protected function _selectContentTypeHeader(array $contentType): string {
        $result = "application/json";
        $contentType = $this->_cleanUp($contentType);

        do {
            if (!count($contentType)) {
                break;
            }

            if (preg_grep("%application\/json%i", $contentType)) {
                break;
            }

            $result = implode(",", $contentType);
        } while (false);

        return $result;
    }

    /**
     * Clean-up headers: remove extra spaces, trim, filter-out empty strings and return unique results
     *
     * @param string[] List of headers
     * @return string[] Filtered list of headers
     */
    protected function _cleanUp(array $headers) {
        return array_filter(
            array_unique(
                array_map(function ($item) {
                    return trim(preg_replace("%\s{2,}%s", " ", $item));
                }, $headers)
            ),
            function ($item) {
                return strlen($item);
            }
        );
    }
}
