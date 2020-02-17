import tokens as tk
import requests
from requests_oauthlib import OAuth1 


def ptweet(tweet):
    url = "https://api.twitter.com/1.1/statuses/update.json?status=" + tweet
    auth = OAuth1(tk.consumer_key,tk.consumer_key_secret,
                    tk.access_token,tk.access_token_secret)
    response = requests.post(url,auth = auth)

    print(response.content)