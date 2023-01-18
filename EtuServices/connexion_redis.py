import redis
import sys
import subprocess

red = redis.Redis()
red.ping()