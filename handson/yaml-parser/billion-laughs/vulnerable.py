#!/usr/bin/env python3
# coding: UTF-8

import yaml

with open("payload.yml") as f:
    yml = yaml.load(f, Loader=yaml.SafeLoader)
    print(yml)
