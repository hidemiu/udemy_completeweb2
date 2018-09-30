name = 'Rob'

if name == 'Rob' or name == 'Risa':
  print 'Hello Rob and Risa' 
else:
  print 'I do not know'
  
# Judge prime numbers
for i in range(60):
  count = 0
  j = i
  while j >= 1:
    if i % j == 0:
      count += 1
    j -= 1
  if count == 2:
    print i
    
    

