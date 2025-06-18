<?php
$phar = new Phar('image.phar', 0, 'symfony');
$phar->startBuffering();
$phar->setSignatureAlgorithm(Phar::SHA256);

$phar->buildFromDirectory('../', '#^(?!.*(composer.json|/.github/|/.idea/|/.git/|/.setting/|/var/cache/|/vendor-bin/|/build/|/vendor/webman/admin/))(.*)$#');
$phar->setStub(<<<CODE
#!/usr/bin/env php
<?php
#define('IN_PHAR', true);
Phar::mapPhar('symfony');
if (!isset(\$_SERVER['APP_RUNTIME'])) {
    \$_SERVER['SCRIPT_FILENAME']='phar://symfony/bin/console';
    require 'phar://symfony/bin/console';
} else {
    \$_SERVER['SCRIPT_FILENAME']='phar://symfony/public/index.php';
    require 'phar://symfony/public/index.php';
}
__HALT_COMPILER();
CODE
);
$phar->stopBuffering();

file_put_contents('symfony.bin', file_get_contents('buildroot/bin/micro.sfx'));
file_put_contents('symfony.bin', file_get_contents('image.phar'), FILE_APPEND);
