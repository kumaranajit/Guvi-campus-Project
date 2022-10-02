
For connecting to redis : 

Change these two file in php.ini configuration file
1. session.save_handler = redis
2. session.save_path = "tcp://127.0.0.1?auth=123"


Thank you !!!