#!/usr/bin/env python3
# coding: UTF-8

import defusedxml.ElementTree as ET

size = 55000
entity = 'A' * size
refs = '&x;' * size
data = '''\
<?xml version="1.0"?>
<!DOCTYPE DoS [
    <!ENTITY x "{entity}">
]>
<DoS>{entityReferences}</DoS>
'''.format(entity=entity, entityReferences=refs)

root = ET.fromstring(data)

