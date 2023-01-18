import redis
import sys

red = redis.Redis()
red.ping()