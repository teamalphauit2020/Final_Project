import sys
import json
import pickle
from collections import Counter
from sklearn.feature_extraction.text import TfidfVectorizer
from datetime import datetime
from sklearn.model_selection import train_test_split
from sklearn.svm import LinearSVC
from sklearn.metrics import accuracy_score
from sklearn.metrics import classification_report
from sklearn.feature_extraction.text import TfidfVectorizer
from nltk.corpus import stopwords
from nltk.tokenize import word_tokenize
import csv
import re

file = open("userReview.txt", "r")
contents = file.read()
list1 = [contents]
with open('reviews400000.csv', newline='') as f:
    reader = csv.reader(f)
    data = list(reader)   
texts=[text[0] for text in data]
stars=[text[1] for text in data]
vectorizer = TfidfVectorizer(ngram_range=(1,2))
vectors = vectorizer.fit_transform(texts)
stop_words = set(stopwords.words('english'))
words = contents.split()
words=[re.sub(r"[^\w\s]","",text) for text in words]
words=[text.casefold() for text in words]
# print(words)
rcount=0
tokenizedtext = " "
for r in words:
    if not r in stop_words:
        tokenizedtext = tokenizedtext+" "+r
        rcount = rcount+1
if rcount==0:
	pass	
else:	
	list1 = [tokenizedtext]
	vec1 = vectorizer.transform(list1)
	with open('myClassifier3.pkl', 'rb') as fid:   
		loaded_classifier = pickle.load(fid)   
	mypred = loaded_classifier.predict(vec1)
	print(float(mypred[0]))
f.close()
# # print(list1)
# for i in {"This","THAT"}:
# 	print(i.casefold())