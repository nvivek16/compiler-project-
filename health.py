import urllib
import BeautifulSoup
import unicodedata
lista=[]
for i in range(2):
	f=urllib.urlopen("http://health.sify.com/page/"+str(i+1)+"/")
	s=f.read()
	htmlcontent=BeautifulSoup.BeautifulSoup(s,convertEntities='html')
	results=htmlcontent.findAll('div',attrs={'id':'center'})
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
	try:
		f1=urllib.urlopen(a)
		s1=f1.read()
		htmlcontent1=BeautifulSoup.BeautifulSoup(s1,convertEntities='html')
		for i1 in htmlcontent1.findAll('script'):
			i1.extract()
		for i2 in htmlcontent1.findAll('a'):
			i2.extract()
		try:
			results1=htmlcontent1.find('div',attrs={'class':'entry'})
			st=st+results1.getText().encode("ascii","ignore")
			results2=htmlcontent1.find('div',attrs={'style':'text-align:left'})
			if results2:
				st=st+results2.getText().encode("ascii","ignore")
		except AttributeError:
			pass
		s1="/home/vivekanandhan/Documents/Trainingset/health_test"+str(i+1)
		print s1
		if st:
			file3=open(s1,"w")
			file3.write(st)
			i=i+1
	except IOError:
		pass
