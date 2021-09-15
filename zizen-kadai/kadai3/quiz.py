#!/usr/bin/env python3
# coding: UTF-8

import sys
import base64
import pickle

args = sys.argv
if len(args) != 2:
    print('第一引数にBase64エンコードされた文字列を指定してください')

try:
    data = base64.urlsafe_b64decode(args[1])
    deserialized = pickle.loads(data)
    print('deserialized: {0}'.format(deserialized))
except:
    print('Failed to deserialize')
