from Aratheme import *
from Aradata import *
from Arapost import post
#code writer
f = open ('code.ara.html' , 'w')
f.write(
'<!DOCTYPE html>'+
'\n<html lang="en" dir="ltr">'+
  '\n<head>'+
    '\n<meta charset="utf-8">'+
    '\n<title>'+name+'website'+'</title>'+style+
  '\n</head>'+
  '\n<body>\n'+
    '\n<div class="title">'+
      '\n'+name+
    '\n</div>'+
    '\n<div class="site-bio">'+
      '\n'+'About us :'+sitebio+
    '\n</div>'+post+
  '\n</body>'+
'\n</html>')
f.close()