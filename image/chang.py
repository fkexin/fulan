#!/usr/bin/env python

import os
import sys

for fname in os.listdir('.'):
	if fname.endswith('.JPG'):
		origin_name = fname.split('.')[0]
		os.rename(fname, origin_name + '.jpg')
		print (fname + 'to ' + origin_name)
