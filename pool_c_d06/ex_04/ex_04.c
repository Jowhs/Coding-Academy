#include <stdio.h>
#include <stdlib.h>

int	my_strlen(char *str)
{
  int a;
  a = 0;
  while(str[a] != '\0'){
    a++;
  }
  return (a);
}


char	*my_strdup(char *str)
{
  char *i;
  int j;

  i = malloc(sizeof(char) * my_strlen(str) + 1);
  j = 0;
  while(str[j] != '\0'){
    i[j] = str[j];
    j++;
  }
  
  return (i);
}
