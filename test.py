import pickle
pkl=open("tokenset","r")
token=pickle.load(pkl)
pkl.close()
print token
import os
path="/home/vivekanandhan/Documents/Testdata"
occur=dict()
file3=open("output1","w")
trainingset=os.listdir(path)
for filename in sorted(trainingset):
	a="9 "
	file1=open(path+'/'+filename,"r").readlines()
	for line in file1:
		temp=line.split()
		for word in temp:
			if word in token.keys():
				temp1=token[word]			
				occur[temp1]=0
	
	for line in file1:
		temp=line.split()	
		for word1 in temp:
			if word1 in token.keys():	
				temp2=token[word1]
				occur[temp2]+=1
					
	print occur
	for t in sorted(occur.keys()):
		a=a+str(t)+":"+str(occur[t])+" "
 	a=a+"\n"
	file3.write(a)
	occur.clear()


