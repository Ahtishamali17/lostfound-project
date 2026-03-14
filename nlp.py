import sys
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.metrics.pairwise import cosine_similarity

text1=sys.argv[1]
text2=sys.argv[2]

vectorizer=TfidfVectorizer()

vectors=vectorizer.fit_transform([text1,text2])

similarity=cosine_similarity(vectors[0],vectors[1])

print(similarity[0][0])