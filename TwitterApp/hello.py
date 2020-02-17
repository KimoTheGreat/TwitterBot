import db_connect as dbc
import post_tweet as pt
import time

conn = dbc.dbCon()
query = "select tweet from tweet_topic"
records = dbc.dbQuery(conn,query)

n = 0
i = 0

while(n < 3):
    n += 1 
    pt.ptweet(records[i][0])
    i += 1
    time.sleep(10)


dbc.dbClose(conn)