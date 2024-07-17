<?php

namespace App\Http\Common;

class HttpCode
{
    const StatusContinue = 100; // RFC 9110, 15.2.1
    const StatusSwitchingProtocols = 101; // RFC 9110, 15.2.2
    const StatusProcessing = 102; // RFC 2518, 10.1
    const StatusEarlyHints = 103; // RFC 8297

    const StatusOK = 200; // RFC 9110, 15.3.1
    const StatusCreated = 201; // RFC 9110, 15.3.2
    const StatusAccepted = 202; // RFC 9110, 15.3.3
    const StatusNonAuthoritativeInfo = 203; // RFC 9110, 15.3.4
    const StatusNoContent = 204; // RFC 9110, 15.3.5
    const StatusResetContent = 205; // RFC 9110, 15.3.6
    const StatusPartialContent = 206; // RFC 9110, 15.3.7
    const StatusMultiStatus = 207; // RFC 4918, 11.1
    const StatusAlreadyReported = 208; // RFC 5842, 7.1
    const StatusIMUsed = 226; // RFC 3229, 10.4.1

    const StatusMultipleChoices = 300; // RFC 9110, 15.4.1
    const StatusMovedPermanently = 301; // RFC 9110, 15.4.2
    const StatusFound = 302; // RFC 9110, 15.4.3
    const StatusSeeOther = 303; // RFC 9110, 15.4.4
    const StatusNotModified = 304; // RFC 9110, 15.4.5
    const StatusUseProxy = 305; // RFC 9110, 15.4.6
    const StatusTemporaryRedirect = 307; // RFC 9110, 15.4.8
    const StatusPermanentRedirect = 308; // RFC 9110, 15.4.9

    const StatusBadRequest = 400; // RFC 9110, 15.5.1
    const StatusUnauthorized = 401; // RFC 9110, 15.5.2
    const StatusPaymentRequired = 402; // RFC 9110, 15.5.3
    const StatusForbidden = 403; // RFC 9110, 15.5.4
    const StatusNotFound = 404; // RFC 9110, 15.5.5
    const StatusMethodNotAllowed = 405; // RFC 9110, 15.5.6
    const StatusNotAcceptable = 406; // RFC 9110, 15.5.7
    const StatusProxyAuthRequired = 407; // RFC 9110, 15.5.8
    const StatusRequestTimeout = 408; // RFC 9110, 15.5.9
    const StatusConflict = 409; // RFC 9110, 15.5.10
    const StatusGone = 410; // RFC 9110, 15.5.11
    const StatusLengthRequired = 411; // RFC 9110, 15.5.12
    const StatusPreconditionFailed = 412; // RFC 9110, 15.5.13
    const StatusRequestEntityTooLarge = 413; // RFC 9110, 15.5.14
    const StatusRequestURITooLong = 414; // RFC 9110, 15.5.15
    const StatusUnsupportedMediaType = 415; // RFC 9110, 15.5.16
    const StatusRequestedRangeNotSatisfiable = 416; // RFC 9110, 15.5.17
    const StatusExpectationFailed = 417; // RFC 9110, 15.5.18
    const StatusTeapot = 418; // RFC 9110, 15.5.19 (Unused)
    const StatusMisdirectedRequest = 421; // RFC 9110, 15.5.20
    const StatusUnprocessableEntity = 422; // RFC 9110, 15.5.21
    const StatusLocked = 423; // RFC 4918, 11.3
    const StatusFailedDependency = 424; // RFC 4918, 11.4
    const StatusTooEarly = 425; // RFC 8470, 5.2.
    const StatusUpgradeRequired = 426; // RFC 9110, 15.5.22
    const StatusPreconditionRequired = 428; // RFC 6585, 3
    const StatusTooManyRequests = 429; // RFC 6585, 4
    const StatusRequestHeaderFieldsTooLarge = 431; // RFC 6585, 5
    const StatusUnavailableForLegalReasons = 451; // RFC 7725, 3

    const StatusInternalServerError = 500; // RFC 9110, 15.6.1
    const StatusNotImplemented = 501; // RFC 9110, 15.6.2
    const StatusBadGateway = 502; // RFC 9110, 15.6.3
    const StatusServiceUnavailable = 503; // RFC 9110, 15.6.4
    const StatusGatewayTimeout = 504; // RFC 9110, 15.6.5
    const StatusHTTPVersionNotSupported = 505; // RFC 9110, 15.6.6
    const StatusVariantAlsoNegotiates = 506; // RFC 2295, 8.1
    const StatusInsufficientStorage = 507; // RFC 4918, 11.5
    const StatusLoopDetected = 508; // RFC 5842, 7.2
    const StatusNotExtended = 510; // RFC 2774, 7
    const StatusNetworkAuthenticationRequired = 511; // RFC 6585, 6

    const STATUS_TEXT = [
        self::StatusContinue => 'Continue', // RFC 9110, 15.2.1
        self::StatusSwitchingProtocols => 'Switching Protocols', // RFC 9110, 15.2.2
        self::StatusProcessing => 'Processing', // RFC 2518, 10.1
        self::StatusEarlyHints => 'Early Hints', // RFC 8297

        self::StatusOK => 'OK', // RFC 9110, 15.3.1
        self::StatusCreated => 'Created', // RFC 9110, 15.3.2
        self::StatusAccepted => 'Accepted', // RFC 9110, 15.3.3
        self::StatusNonAuthoritativeInfo => 'Non-Authoritative Information', // RFC 9110, 15.3.4
        self::StatusNoContent => 'No Content', // RFC 9110, 15.3.5
        self::StatusResetContent => 'Reset Content', // RFC 9110, 15.3.6
        self::StatusPartialContent => 'Partial Content', // RFC 9110, 15.3.7
        self::StatusMultiStatus => 'Multi-Status', // RFC 4918, 11.1
        self::StatusAlreadyReported => 'Already Reported', // RFC 5842, 7.1
        self::StatusIMUsed => 'IM Used', // RFC 3229, 10.4.1

        self::StatusMultipleChoices => 'Multiple Choices', // RFC 9110, 15.4.1
        self::StatusMovedPermanently => 'Moved Permanently', // RFC 9110, 15.4.2
        self::StatusFound => 'Found', // RFC 9110, 15.4.3
        self::StatusSeeOther => 'See Other', // RFC 9110, 15.4.4
        self::StatusNotModified => 'Not Modified', // RFC 9110, 15.4.5
        self::StatusUseProxy => 'Use Proxy', // RFC 9110, 15.4.6
        self::StatusTemporaryRedirect => 'Temporary Redirect', // RFC 9110, 15.4.8
        self::StatusPermanentRedirect => 'Permanent Redirect', // RFC 9110, 15.4.9

        self::StatusBadRequest => 'Bad Request', // RFC 9110, 15.5.1
        self::StatusUnauthorized => 'Unauthorized', // RFC 9110, 15.5.2
        self::StatusPaymentRequired => 'Payment Required', // RFC 9110, 15.5.3
        self::StatusForbidden => 'Forbidden', // RFC 9110, 15.5.4
        self::StatusNotFound => 'Not Found', // RFC 9110, 15.5.5
        self::StatusMethodNotAllowed => 'Method Not Allowed', // RFC 9110, 15.5.6
        self::StatusNotAcceptable => 'Not Acceptable', // RFC 9110, 15.5.7
        self::StatusProxyAuthRequired => 'Proxy Authentication Required', // RFC 9110, 15.5.8
        self::StatusRequestTimeout => 'Request Timeout', // RFC 9110, 15.5.9
        self::StatusConflict => 'Conflict', // RFC 9110, 15.5.10
        self::StatusGone => 'Gone', // RFC 9110, 15.5.11
        self::StatusLengthRequired => 'Length Required', // RFC 9110, 15.5.12
        self::StatusPreconditionFailed => 'Precondition Failed', // RFC 9110, 15.5.13
        self::StatusRequestEntityTooLarge => 'Request Entity Too Large', // RFC 9110, 15.5.14
        self::StatusRequestURITooLong => 'Request URI Too Long', // RFC 9110, 15.5.15
        self::StatusUnsupportedMediaType => 'Unsupported Media Type', // RFC 9110, 15.5.16
        self::StatusRequestedRangeNotSatisfiable => 'Requested Range Not Satisfiable', // RFC 9110, 15.5.17
        self::StatusExpectationFailed => 'Expectation Failed', // RFC 9110, 15.5.18
        self::StatusTeapot => 'I\'m a teapot', // RFC 9110, 15.5.19 (Unused)
        self::StatusMisdirectedRequest => 'Misdirected Request', // RFC 9110, 15.5.20
        self::StatusUnprocessableEntity => 'Unprocessable Entity', // RFC 9110, 15.5.21
        self::StatusLocked => 'Locked', // RFC 4918, 11.3
        self::StatusFailedDependency => 'Failed Dependency', // RFC 4918, 11.4
        self::StatusTooEarly => 'Too Early', // RFC 8470, 5.2.
        self::StatusUpgradeRequired => 'Upgrade Required', // RFC 9110, 15.5.22
        self::StatusPreconditionRequired => 'Precondition Required', // RFC 6585, 3
        self::StatusTooManyRequests => 'Too Many Requests', // RFC 6585, 4
        self::StatusRequestHeaderFieldsTooLarge => 'Request Header Fields Too Large', // RFC 6585, 5
        self::StatusUnavailableForLegalReasons => 'Unavailable For Legal Reasons', // RFC 7725, 3

        self::StatusInternalServerError => 'Internal Server Error', // RFC 9110, 15.6.1
        self::StatusNotImplemented => 'Not Implemented', // RFC 9110, 15.6.2
        self::StatusBadGateway => 'Bad Gateway', // RFC 9110, 15.6.3
        self::StatusServiceUnavailable => 'Service Unavailable', // RFC 9110, 15.6.4
        self::StatusGatewayTimeout => 'Gateway Timeout', // RFC 9110, 15.6.5
        self::StatusHTTPVersionNotSupported => 'HTTP Version Not Supported', // RFC 9110, 15.6.6
        self::StatusVariantAlsoNegotiates => 'Variant Also Negotiates', // RFC 2295, 8.1
        self::StatusInsufficientStorage => 'Insufficient Storage', // RFC 4918, 11.5
        self::StatusLoopDetected => 'Loop Detected', // RFC 5842, 7.2
        self::StatusNotExtended => 'Not Extended', // RFC 2774, 7
        self::StatusNetworkAuthenticationRequired => 'Network Authentication Required', // RFC 6585, 6
    ];

    public function getHttpStatusText(int $httpCode): string
    {
        return self::STATUS_TEXT[$httpCode] ?? '请填写正确的状态码';
    }
}
