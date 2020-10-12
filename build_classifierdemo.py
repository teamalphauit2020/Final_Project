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
import matplotlib.pyplot as plt

with open('product_reviews.json') as f:
   reviews = json.load(f)


texts = [rev['reviewText'] for rev in reviews]
stars = [rev['overall'] for rev in reviews]

vectorizer = TfidfVectorizer(ngram_range=(1,2))
vectors = vectorizer.fit_transform(texts)
#print(vectors)
#print(stars)


X_train, X_test, y_train, y_test = train_test_split(vectors, stars, test_size=0.1, random_state=42)
print(X_train)
print("-----------------------------------------------")
print(X_test)

print("-----------------------------------------------")

print(y_train)
print("------------------------------------------------")
print(y_test)

classifier = LinearSVC()


classifier.fit(X_train, y_train)



with open('myClassifier.pkl', 'wb') as fid:
    pickle.dump(classifier, fid)


print("-------------------------------------------------")
preds = classifier.predict(X_test)

print(list(preds[:3]))
print(y_test[:3])
print(accuracy_score(y_test, preds,normalize=False))
 
