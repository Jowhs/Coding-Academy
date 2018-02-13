#include <stdio.h>
#include <stdlib.h>

int	main()
{
  int z;

  z = 4;
  int *result = my_up(z);
  printf("%d - %d\n", result[0], result[1]);
    
  return (0);
}
