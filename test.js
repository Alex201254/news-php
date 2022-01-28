function findNb(m) {
   // your code
 let n = 0;
 let i = 0;
 while(n < m){
   n += Math.pow((i + 1),3);
   i++;
 }
 if(n == m)
   return i;
 return (-1);
}

console.log(findNb(1071225));
