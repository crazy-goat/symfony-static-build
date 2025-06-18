#!/usr/bin/env sh
if [ ! -f  "spc" ]; then
curl -fsSL -o spc https://dl.static-php.dev/static-php-cli/spc-bin/nightly/spc-linux-x86_64
chmox +x spc
./spc install-pkg upx
fi

./spc craft
