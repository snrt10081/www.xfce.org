#!/bin/bash

root=../..
pofiles=$root/lib/po
localedir=$root/lib/locale

if test ! -f $pofiles/www.pot; then
  echo "No pot file found!"
  exit 1
fi

tmpfile=$(mktemp -t XXXX.po)

for f in $(find $pofiles -name "*.po")
do
  file=$(basename $f)
  lang=${file%.po}

  # Merge po file with latest pot file
  res=0
  # TODO: add "--lang $lang" again when earlgrey runs squeeze
  msgmerge -N -q -o $tmpfile $f $pofiles/www.pot &> /dev/null && res=1
  if test $res -eq 0; then
    echo "msgmerge failed for $file"
    continue
  fi

  # Check the file
  res=0
  msgfmt -c -o /dev/null $tmpfile &> $tmpfile.log && res=1
  if test $res -eq 0; then
    echo "$file is not valid"
    cat $tmpfile.log
    echo
    echo
    rm -f $tmpfile.log
    continue
  fi

  rm $tmpfile.log

  # Compile catalog
  path=$localedir/$lang/LC_MESSAGES
  mkdir -p $path
  msgfmt --no-hash -o $path/www.mo $tmpfile
done

rm -f $tmpfile
