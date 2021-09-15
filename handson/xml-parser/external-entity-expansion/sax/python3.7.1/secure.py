#!/usr/bin/env python3
# coding: UTF-8

import xml.sax as sax
import defusedxml.sax

class ExampleContentHandler(sax.ContentHandler):
    def __init__(self):
        sax.ContentHandler.__init__(self)
 
    def startElement(self, name, attrs):
        print("Start:", name.strip())
 
    def endElement(self, name):
        print("End:", name.strip())
 
    def characters(self, content):
        print(conten.strip()t)

data = b'''\
<!DOCTYPE data [
<!ENTITY secret SYSTEM "file:///etc/passwd">
]>
<data>
    &secret;
</data>
'''

defusedxml.sax.parseString(data, ExampleContentHandler())
