import json 
import sys
import pickle
from collections import Counter
from sklearn.feature_extraction.text import TfidfVectorizer
from datetime import datetime
from sklearn.model_selection import train_test_split
from sklearn.svm import LinearSVC
from sklearn.metrics import accuracy_score
from sklearn.metrics import classification_report
from nltk.corpus import stopwords
from nltk.tokenize import word_tokenize
import pandas as pd
import csv

with open('reviews400000.csv', newline='') as f:
    reader1 = csv.reader(f)
    data = list(reader1)    
texts=[text[0] for text in data]
stars=[text[1] for text in data]
vectorizer = TfidfVectorizer(ngram_range=(1,2))
vectors = vectorizer.fit_transform(texts)
X_train, X_test, y_train, y_test = train_test_split(vectors, stars, test_size=0.3, random_state=42)
classifier = LinearSVC()
classifier.fit(X_train, y_train)
with open('myClassifier3.pkl', 'wb') as fid:
    pickle.dump(classifier, fid)
preds = classifier.predict(X_test)
# print(y_test[:10])
# print(accuracy_score(y_test, preds))