#include <stdio.h>
#include <stdlib.h>

int	main()
{
  /*int a;

    a = 42;
    my_show_address(&a);
  */
  int *i;

  i = malloc(sizeof(int));
  my_show_address(i);
  free(i);
  return (0);
}
