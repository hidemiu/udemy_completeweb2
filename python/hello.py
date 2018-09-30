#!/usr/bin/python

#print 'Content-type: text/html'
#print ''
print 'Hello Python'

name = 'Rob'

for i in range(4,7):
  print i

print name

list = ['tennis', 'football', 'sumo']

for sport in list:
  print 'sport is ' + sport + '.'
  
x = 0
while x <= 2:
  print x
  x += 1
  
ages = {}

ages["Tom"] = 35
ages["Risa"] = 36
ages["Ben"] = 15
ages["Maria"] = 29

for age in ages:
  print age + ' is ' + str(ages[age]) + '.'
  
