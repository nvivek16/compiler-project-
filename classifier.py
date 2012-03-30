import os
import pickle
path="/home/vivekanandhan/Documents/Trainingset"
count=1
classify={"education1":1,"sports":2,"health":3}
global token
token=dict()
occur=dict()
file3=open("output","w")
trainingset=os.listdir(path)
for filename in trainingset:
	file2=filename.split('_')
	class1=classify[file2[0]]
	a=""+str(class1)+" "
	file1=open(path+'/'+filename,"r").readlines()
	for line in file1:
		temp=line.split()
		for word in temp:
			if word not in token.keys():
				token[word]=count
				occur[count]=0
				count+=1
			else:
				temp1=token[word]
				occur[temp1]=0
	for line in file1:
		temp=line.split()	
		for word1 in temp:
			temp1=token[word1]
			occur[temp1]+=1
					
	print token
	for t in sorted(occur.keys()):
		a=a+str(t)+":"+str(occur[t])+" "
 	a=a+"\n"
	file3.write(a)
	occur.clear()
	'''print sortoccur'''
	
file4=open("tokenset","w")	
pickle.dump(token,file4)
file4.close()

