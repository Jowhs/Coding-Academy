#include <stdio.h>

int	my_power_it(int a, int b)
{
  int i;
  int j;
  
  i = b;
  j = a;
  while(i > 1){
    j = j * a; 
    i--;
  }
  return(j);
}

int	main()
{
  printf("%d\n", my_power_it(4, 3));
  return (0);
}
