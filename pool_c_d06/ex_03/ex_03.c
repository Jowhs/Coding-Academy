#include <stdio.h>
#include <stdlib.h>

int	*my_up(int num)
{
  int  *a;

  a = malloc(2 * sizeof(int));
  a[0] = num;
  a[1] = num * 2;

  return (a);
}
