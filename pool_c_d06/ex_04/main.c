#include <stdio.h>
#include <stdlib.h>

int	main()
{
  char *a;
  char *result;

  a = malloc(sizeof(char) * 5);
  a = "Programación en C\0";

  result = my_strdup(a);
  
  printf("%s\n", result);
  return (0);
}
