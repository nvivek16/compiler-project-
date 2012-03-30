import urllib
import BeautifulSoup
import unicodedata
lista=[]
for i in range(5):
	f=urllib.urlopen("http://www.sify.com/sports/moreheadlines/category/cricket/page/"+str(i+1)+".html")
	s=f.read()
	htmlcontent=BeautifulSoup.BeautifulSoup(s,convertEntities='html')
	results=htmlcontent.findAll('div',attrs={'style':'width:459px;float:left;padding-left:25px;'})
	for res in results[0].findAll('a',attrs={}):
		lista.append(res.get("href").encode("ascii","ignore"))
listb=list(set(lista))
j=0;
for i2 in listb:
	print i2
	j+=1
	print j
i=0
for a in listb:
	st=''
	f1=urllib.urlopen(a)
	s1=f1.read()
	htmlcontent1=BeautifulSoup.BeautifulSoup(s1,convertEntities='html')
	for i1 in htmlcontent1.findAll('script'):
		i1.extract()
	results1=htmlcontent1.find('p',attrs={})
	st=st+results1.getText().encode("ascii","ignore")
	results2=htmlcontent1.find('div',attrs={'style':'text-align:left'})
	if results2:
		st=st+results2.getText().encode("ascii","ignore")
	s1="/home/vivekanandhan/Documents/Trainingset/sports_test"+str(i+1)
	print s1
	file3=open(s1,"w")
	file3.write(st)
	i=i+1
