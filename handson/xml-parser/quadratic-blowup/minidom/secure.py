#!/usr/bin/env python3
# coding: UTF-8

import defusedxml.minidom as minidom

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

dom = minidom.parseString(data)
for child in dom.childNodes:
    for node in child.childNodes:
        pass