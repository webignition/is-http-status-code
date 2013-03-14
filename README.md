is-http-status-code
===================

Simple small library to check if a given number is an HTTP status code.

Ever found yourself facing a number in your code and wondering whether it's a HTTP
status code?

Problem solved!

### The "Hello World" example

```php
<?php
$this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(100));
$this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(301));
$this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(404));
$this->assertTrue(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(503));

$this->assertFalse(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(true));
$this->assertFalse(\webignition\IsHttpStatusCode\IsHttpStatusCode::check(false));
$this->assertFalse(\webignition\IsHttpStatusCode\IsHttpStatusCode::check('Hello World!'));
```
