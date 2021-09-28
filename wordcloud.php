import wordcloud

# create dictionary for `generate_from_frequencies` function.
frequenciesOfWords = {}

# Here is a list of punctuations 
punctuations = '''!()-[]{};:'"\,<>./?@#$%^&*_~'''

# and stop-words you can use to process your text
stop_words = ["the", "a", "to", "if", "is", "it", "of", "and", "or", "an", "as", "i", "me", "my", \
  "we", "our", "ours", "you", "your", "yours", "he", "she", "him", "his", "her", "hers", "its", "they", "them", \
  "their", "what", "which", "who", "whom", "this", "that", "am", "are", "was", "were", "be", "been", "being", \
  "have", "has", "had", "do", "does", "did", "but", "at", "by", "with", "from", "here", "when", "where", "how", \
  "all", "any", "both", "each", "few", "more", "some", "such", "no", "nor", "too", "very", "can", "will", "just"]
    
# create word-list based on file_contents 
for item in file_contents.split():
       
  # remove content of punctuations inside of item-variable
  # and save result into variable word
  word = ""
  for char in item:
    if char not in punctuations:
      word = word + char
        
  # check if content of word-variable exist inside of stop_words
  if word.lower() in stop_words:
    continue
  # is there a key with value of variable word?
  if word in frequenciesOfWords:
    frequenciesOfWords[word] = frequenciesOfWords[word] + 1
  else:
    frequenciesOfWords[word] = 1
    
#wordcloud
cloud = wordcloud.WordCloud()
cloud.generate_from_frequencies(frequenciesOfWords)
cloud.to_file("wordcloud.png")
