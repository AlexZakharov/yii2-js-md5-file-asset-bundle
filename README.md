# Yii2 JS md5_file Asset Bundle
## Installation

Installation with Composer

Either run
~~~
    php composer.phar require kfosoft/yii2-js-md5-file-asset-bundle:"*"
~~~
or add in composer.json
~~~
    "require": {
        ...
        "kfosoft/yii2-js-md5-file-asset-bundle":"*"
    }
~~~

## Example
~~~
sum = '';
var def = md5_file(data.files[0]);
def.done(function(){
    if (!def.sum) {
        ...
    } else {
        sum = def.sum;
    }
    ...
});
~~~

Enjoy, guys!
