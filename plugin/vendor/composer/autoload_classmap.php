<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'FioApi\\Account' => $vendorDir . '/mhujer/fio-api-php/src/FioApi/Account.php',
    'FioApi\\Downloader' => $vendorDir . '/mhujer/fio-api-php/src/FioApi/Downloader.php',
    'FioApi\\Exceptions\\InternalErrorException' => $vendorDir . '/mhujer/fio-api-php/src/FioApi/Exceptions/InternalErrorException.php',
    'FioApi\\Exceptions\\MissingTokenException' => $vendorDir . '/mhujer/fio-api-php/src/FioApi/Exceptions/MissingTokenException.php',
    'FioApi\\Exceptions\\TooGreedyException' => $vendorDir . '/mhujer/fio-api-php/src/FioApi/Exceptions/TooGreedyException.php',
    'FioApi\\Transaction' => $vendorDir . '/mhujer/fio-api-php/src/FioApi/Transaction.php',
    'FioApi\\TransactionList' => $vendorDir . '/mhujer/fio-api-php/src/FioApi/TransactionList.php',
    'FioApi\\UrlBuilder' => $vendorDir . '/mhujer/fio-api-php/src/FioApi/UrlBuilder.php',
    'FioTransactions\\Accounts\\AccountsInit' => $baseDir . '/src/Accounts/AccountsInit.php',
    'FioTransactions\\Accounts\\Admin' => $baseDir . '/src/Accounts/Admin.php',
    'FioTransactions\\Accounts\\Columns' => $baseDir . '/src/Accounts/Columns.php',
    'FioTransactions\\Admin\\Admin' => $baseDir . '/src/Admin/Admin.php',
    'FioTransactions\\Admin\\Settings' => $baseDir . '/src/Admin/Settings.php',
    'FioTransactions\\Admin\\Shortcode' => $baseDir . '/src/Admin/Shortcode.php',
    'FioTransactions\\Api\\Account' => $baseDir . '/src/Api/Account.php',
    'FioTransactions\\Api\\AccountFactory' => $baseDir . '/src/Api/AccountFactory.php',
    'FioTransactions\\Api\\IAccount' => $baseDir . '/src/Api/IAccount.php',
    'FioTransactions\\Api\\IAccountFactory' => $baseDir . '/src/Api/IAccountFactory.php',
    'FioTransactions\\Api\\TAccount' => $baseDir . '/src/Api/TAccount.php',
    'FioTransactions\\Frontend\\Frontend' => $baseDir . '/src/Frontend/Frontend.php',
    'FioTransactions\\Frontend\\Shortcode' => $baseDir . '/src/Frontend/Shortcode.php',
    'FioTransactions\\General\\General' => $baseDir . '/src/General/General.php',
    'FioTransactions\\Services\\Services' => $baseDir . '/src/Services/Services.php',
    'FioTransactions\\Utils\\Helpers' => $baseDir . '/src/Utils/Helpers.php',
    'GuzzleHttp\\BodySummarizer' => $vendorDir . '/guzzlehttp/guzzle/src/BodySummarizer.php',
    'GuzzleHttp\\BodySummarizerInterface' => $vendorDir . '/guzzlehttp/guzzle/src/BodySummarizerInterface.php',
    'GuzzleHttp\\Client' => $vendorDir . '/guzzlehttp/guzzle/src/Client.php',
    'GuzzleHttp\\ClientInterface' => $vendorDir . '/guzzlehttp/guzzle/src/ClientInterface.php',
    'GuzzleHttp\\ClientTrait' => $vendorDir . '/guzzlehttp/guzzle/src/ClientTrait.php',
    'GuzzleHttp\\Cookie\\CookieJar' => $vendorDir . '/guzzlehttp/guzzle/src/Cookie/CookieJar.php',
    'GuzzleHttp\\Cookie\\CookieJarInterface' => $vendorDir . '/guzzlehttp/guzzle/src/Cookie/CookieJarInterface.php',
    'GuzzleHttp\\Cookie\\FileCookieJar' => $vendorDir . '/guzzlehttp/guzzle/src/Cookie/FileCookieJar.php',
    'GuzzleHttp\\Cookie\\SessionCookieJar' => $vendorDir . '/guzzlehttp/guzzle/src/Cookie/SessionCookieJar.php',
    'GuzzleHttp\\Cookie\\SetCookie' => $vendorDir . '/guzzlehttp/guzzle/src/Cookie/SetCookie.php',
    'GuzzleHttp\\Exception\\BadResponseException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/BadResponseException.php',
    'GuzzleHttp\\Exception\\ClientException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/ClientException.php',
    'GuzzleHttp\\Exception\\ConnectException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/ConnectException.php',
    'GuzzleHttp\\Exception\\GuzzleException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/GuzzleException.php',
    'GuzzleHttp\\Exception\\InvalidArgumentException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/InvalidArgumentException.php',
    'GuzzleHttp\\Exception\\RequestException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/RequestException.php',
    'GuzzleHttp\\Exception\\ServerException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/ServerException.php',
    'GuzzleHttp\\Exception\\TooManyRedirectsException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/TooManyRedirectsException.php',
    'GuzzleHttp\\Exception\\TransferException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/TransferException.php',
    'GuzzleHttp\\HandlerStack' => $vendorDir . '/guzzlehttp/guzzle/src/HandlerStack.php',
    'GuzzleHttp\\Handler\\CurlFactory' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/CurlFactory.php',
    'GuzzleHttp\\Handler\\CurlFactoryInterface' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/CurlFactoryInterface.php',
    'GuzzleHttp\\Handler\\CurlHandler' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/CurlHandler.php',
    'GuzzleHttp\\Handler\\CurlMultiHandler' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/CurlMultiHandler.php',
    'GuzzleHttp\\Handler\\EasyHandle' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/EasyHandle.php',
    'GuzzleHttp\\Handler\\HeaderProcessor' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/HeaderProcessor.php',
    'GuzzleHttp\\Handler\\MockHandler' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/MockHandler.php',
    'GuzzleHttp\\Handler\\Proxy' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/Proxy.php',
    'GuzzleHttp\\Handler\\StreamHandler' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/StreamHandler.php',
    'GuzzleHttp\\MessageFormatter' => $vendorDir . '/guzzlehttp/guzzle/src/MessageFormatter.php',
    'GuzzleHttp\\MessageFormatterInterface' => $vendorDir . '/guzzlehttp/guzzle/src/MessageFormatterInterface.php',
    'GuzzleHttp\\Middleware' => $vendorDir . '/guzzlehttp/guzzle/src/Middleware.php',
    'GuzzleHttp\\Pool' => $vendorDir . '/guzzlehttp/guzzle/src/Pool.php',
    'GuzzleHttp\\PrepareBodyMiddleware' => $vendorDir . '/guzzlehttp/guzzle/src/PrepareBodyMiddleware.php',
    'GuzzleHttp\\Promise\\AggregateException' => $vendorDir . '/guzzlehttp/promises/src/AggregateException.php',
    'GuzzleHttp\\Promise\\CancellationException' => $vendorDir . '/guzzlehttp/promises/src/CancellationException.php',
    'GuzzleHttp\\Promise\\Coroutine' => $vendorDir . '/guzzlehttp/promises/src/Coroutine.php',
    'GuzzleHttp\\Promise\\Create' => $vendorDir . '/guzzlehttp/promises/src/Create.php',
    'GuzzleHttp\\Promise\\Each' => $vendorDir . '/guzzlehttp/promises/src/Each.php',
    'GuzzleHttp\\Promise\\EachPromise' => $vendorDir . '/guzzlehttp/promises/src/EachPromise.php',
    'GuzzleHttp\\Promise\\FulfilledPromise' => $vendorDir . '/guzzlehttp/promises/src/FulfilledPromise.php',
    'GuzzleHttp\\Promise\\Is' => $vendorDir . '/guzzlehttp/promises/src/Is.php',
    'GuzzleHttp\\Promise\\Promise' => $vendorDir . '/guzzlehttp/promises/src/Promise.php',
    'GuzzleHttp\\Promise\\PromiseInterface' => $vendorDir . '/guzzlehttp/promises/src/PromiseInterface.php',
    'GuzzleHttp\\Promise\\PromisorInterface' => $vendorDir . '/guzzlehttp/promises/src/PromisorInterface.php',
    'GuzzleHttp\\Promise\\RejectedPromise' => $vendorDir . '/guzzlehttp/promises/src/RejectedPromise.php',
    'GuzzleHttp\\Promise\\RejectionException' => $vendorDir . '/guzzlehttp/promises/src/RejectionException.php',
    'GuzzleHttp\\Promise\\TaskQueue' => $vendorDir . '/guzzlehttp/promises/src/TaskQueue.php',
    'GuzzleHttp\\Promise\\TaskQueueInterface' => $vendorDir . '/guzzlehttp/promises/src/TaskQueueInterface.php',
    'GuzzleHttp\\Promise\\Utils' => $vendorDir . '/guzzlehttp/promises/src/Utils.php',
    'GuzzleHttp\\Psr7\\AppendStream' => $vendorDir . '/guzzlehttp/psr7/src/AppendStream.php',
    'GuzzleHttp\\Psr7\\BufferStream' => $vendorDir . '/guzzlehttp/psr7/src/BufferStream.php',
    'GuzzleHttp\\Psr7\\CachingStream' => $vendorDir . '/guzzlehttp/psr7/src/CachingStream.php',
    'GuzzleHttp\\Psr7\\DroppingStream' => $vendorDir . '/guzzlehttp/psr7/src/DroppingStream.php',
    'GuzzleHttp\\Psr7\\FnStream' => $vendorDir . '/guzzlehttp/psr7/src/FnStream.php',
    'GuzzleHttp\\Psr7\\Header' => $vendorDir . '/guzzlehttp/psr7/src/Header.php',
    'GuzzleHttp\\Psr7\\InflateStream' => $vendorDir . '/guzzlehttp/psr7/src/InflateStream.php',
    'GuzzleHttp\\Psr7\\LazyOpenStream' => $vendorDir . '/guzzlehttp/psr7/src/LazyOpenStream.php',
    'GuzzleHttp\\Psr7\\LimitStream' => $vendorDir . '/guzzlehttp/psr7/src/LimitStream.php',
    'GuzzleHttp\\Psr7\\Message' => $vendorDir . '/guzzlehttp/psr7/src/Message.php',
    'GuzzleHttp\\Psr7\\MessageTrait' => $vendorDir . '/guzzlehttp/psr7/src/MessageTrait.php',
    'GuzzleHttp\\Psr7\\MimeType' => $vendorDir . '/guzzlehttp/psr7/src/MimeType.php',
    'GuzzleHttp\\Psr7\\MultipartStream' => $vendorDir . '/guzzlehttp/psr7/src/MultipartStream.php',
    'GuzzleHttp\\Psr7\\NoSeekStream' => $vendorDir . '/guzzlehttp/psr7/src/NoSeekStream.php',
    'GuzzleHttp\\Psr7\\PumpStream' => $vendorDir . '/guzzlehttp/psr7/src/PumpStream.php',
    'GuzzleHttp\\Psr7\\Query' => $vendorDir . '/guzzlehttp/psr7/src/Query.php',
    'GuzzleHttp\\Psr7\\Request' => $vendorDir . '/guzzlehttp/psr7/src/Request.php',
    'GuzzleHttp\\Psr7\\Response' => $vendorDir . '/guzzlehttp/psr7/src/Response.php',
    'GuzzleHttp\\Psr7\\Rfc7230' => $vendorDir . '/guzzlehttp/psr7/src/Rfc7230.php',
    'GuzzleHttp\\Psr7\\ServerRequest' => $vendorDir . '/guzzlehttp/psr7/src/ServerRequest.php',
    'GuzzleHttp\\Psr7\\Stream' => $vendorDir . '/guzzlehttp/psr7/src/Stream.php',
    'GuzzleHttp\\Psr7\\StreamDecoratorTrait' => $vendorDir . '/guzzlehttp/psr7/src/StreamDecoratorTrait.php',
    'GuzzleHttp\\Psr7\\StreamWrapper' => $vendorDir . '/guzzlehttp/psr7/src/StreamWrapper.php',
    'GuzzleHttp\\Psr7\\UploadedFile' => $vendorDir . '/guzzlehttp/psr7/src/UploadedFile.php',
    'GuzzleHttp\\Psr7\\Uri' => $vendorDir . '/guzzlehttp/psr7/src/Uri.php',
    'GuzzleHttp\\Psr7\\UriNormalizer' => $vendorDir . '/guzzlehttp/psr7/src/UriNormalizer.php',
    'GuzzleHttp\\Psr7\\UriResolver' => $vendorDir . '/guzzlehttp/psr7/src/UriResolver.php',
    'GuzzleHttp\\Psr7\\Utils' => $vendorDir . '/guzzlehttp/psr7/src/Utils.php',
    'GuzzleHttp\\RedirectMiddleware' => $vendorDir . '/guzzlehttp/guzzle/src/RedirectMiddleware.php',
    'GuzzleHttp\\RequestOptions' => $vendorDir . '/guzzlehttp/guzzle/src/RequestOptions.php',
    'GuzzleHttp\\RetryMiddleware' => $vendorDir . '/guzzlehttp/guzzle/src/RetryMiddleware.php',
    'GuzzleHttp\\TransferStats' => $vendorDir . '/guzzlehttp/guzzle/src/TransferStats.php',
    'GuzzleHttp\\Utils' => $vendorDir . '/guzzlehttp/guzzle/src/Utils.php',
    'Pimple\\Container' => $vendorDir . '/pimple/pimple/src/Pimple/Container.php',
    'Pimple\\Exception\\ExpectedInvokableException' => $vendorDir . '/pimple/pimple/src/Pimple/Exception/ExpectedInvokableException.php',
    'Pimple\\Exception\\FrozenServiceException' => $vendorDir . '/pimple/pimple/src/Pimple/Exception/FrozenServiceException.php',
    'Pimple\\Exception\\InvalidServiceIdentifierException' => $vendorDir . '/pimple/pimple/src/Pimple/Exception/InvalidServiceIdentifierException.php',
    'Pimple\\Exception\\UnknownIdentifierException' => $vendorDir . '/pimple/pimple/src/Pimple/Exception/UnknownIdentifierException.php',
    'Pimple\\Psr11\\Container' => $vendorDir . '/pimple/pimple/src/Pimple/Psr11/Container.php',
    'Pimple\\Psr11\\ServiceLocator' => $vendorDir . '/pimple/pimple/src/Pimple/Psr11/ServiceLocator.php',
    'Pimple\\ServiceIterator' => $vendorDir . '/pimple/pimple/src/Pimple/ServiceIterator.php',
    'Pimple\\ServiceProviderInterface' => $vendorDir . '/pimple/pimple/src/Pimple/ServiceProviderInterface.php',
    'Pimple\\Tests\\Fixtures\\Invokable' => $vendorDir . '/pimple/pimple/src/Pimple/Tests/Fixtures/Invokable.php',
    'Pimple\\Tests\\Fixtures\\NonInvokable' => $vendorDir . '/pimple/pimple/src/Pimple/Tests/Fixtures/NonInvokable.php',
    'Pimple\\Tests\\Fixtures\\PimpleServiceProvider' => $vendorDir . '/pimple/pimple/src/Pimple/Tests/Fixtures/PimpleServiceProvider.php',
    'Pimple\\Tests\\Fixtures\\Service' => $vendorDir . '/pimple/pimple/src/Pimple/Tests/Fixtures/Service.php',
    'Pimple\\Tests\\PimpleServiceProviderInterfaceTest' => $vendorDir . '/pimple/pimple/src/Pimple/Tests/PimpleServiceProviderInterfaceTest.php',
    'Pimple\\Tests\\PimpleTest' => $vendorDir . '/pimple/pimple/src/Pimple/Tests/PimpleTest.php',
    'Pimple\\Tests\\Psr11\\ContainerTest' => $vendorDir . '/pimple/pimple/src/Pimple/Tests/Psr11/ContainerTest.php',
    'Pimple\\Tests\\Psr11\\ServiceLocatorTest' => $vendorDir . '/pimple/pimple/src/Pimple/Tests/Psr11/ServiceLocatorTest.php',
    'Pimple\\Tests\\ServiceIteratorTest' => $vendorDir . '/pimple/pimple/src/Pimple/Tests/ServiceIteratorTest.php',
    'Psr\\Container\\ContainerExceptionInterface' => $vendorDir . '/psr/container/src/ContainerExceptionInterface.php',
    'Psr\\Container\\ContainerInterface' => $vendorDir . '/psr/container/src/ContainerInterface.php',
    'Psr\\Container\\NotFoundExceptionInterface' => $vendorDir . '/psr/container/src/NotFoundExceptionInterface.php',
    'Psr\\Http\\Client\\ClientExceptionInterface' => $vendorDir . '/psr/http-client/src/ClientExceptionInterface.php',
    'Psr\\Http\\Client\\ClientInterface' => $vendorDir . '/psr/http-client/src/ClientInterface.php',
    'Psr\\Http\\Client\\NetworkExceptionInterface' => $vendorDir . '/psr/http-client/src/NetworkExceptionInterface.php',
    'Psr\\Http\\Client\\RequestExceptionInterface' => $vendorDir . '/psr/http-client/src/RequestExceptionInterface.php',
    'Psr\\Http\\Message\\MessageInterface' => $vendorDir . '/psr/http-message/src/MessageInterface.php',
    'Psr\\Http\\Message\\RequestInterface' => $vendorDir . '/psr/http-message/src/RequestInterface.php',
    'Psr\\Http\\Message\\ResponseInterface' => $vendorDir . '/psr/http-message/src/ResponseInterface.php',
    'Psr\\Http\\Message\\ServerRequestInterface' => $vendorDir . '/psr/http-message/src/ServerRequestInterface.php',
    'Psr\\Http\\Message\\StreamInterface' => $vendorDir . '/psr/http-message/src/StreamInterface.php',
    'Psr\\Http\\Message\\UploadedFileInterface' => $vendorDir . '/psr/http-message/src/UploadedFileInterface.php',
    'Psr\\Http\\Message\\UriInterface' => $vendorDir . '/psr/http-message/src/UriInterface.php',
);
