#include <stdio.h>
#include <stdlib.h>

int	main()
{
  char *str1;
  char *str2;

  str2 = malloc(10);
  str2 = "Botella\0";

  str1 = my_strcpy(str1, str2);

  printf("%s\n", str1);
  free(str1);
}
