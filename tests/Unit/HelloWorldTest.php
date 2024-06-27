<?php

use Herytz\HelloPhpLib\HelloWord;

test('should run hello world', function () {
    $helloWord = new HelloWord();
    expect($helloWord->sayHello())->toBe('Hello World!');
});