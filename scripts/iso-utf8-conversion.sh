#!/bin/bash
FROM=iso-8859-9
TO=utf-8
ICONV="iconv -f $FROM -t $TO"
# Convert
find . -type f \( -name "*.html" -o -name "*.php" \) | while read fn; do
cp ${fn} ${fn}.iso
$ICONV < ${fn}.iso > ${fn}
rm ${fn}.iso
done 
LC_ALL=C rpl -iR charset\=iso-8859-9 charset\=utf-8 *.php
LC_ALL=C rpl -iR charset\=iso-8859-9 charset\=utf-8 *.html
