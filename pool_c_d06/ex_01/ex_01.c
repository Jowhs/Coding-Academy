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

char	*my_strcpy(char *dst, char *src)
{
  dst = malloc(sizeof(char) * (my_strlen(src) + 1));

  int i;

  i = 0;
  while(src[i] != '\0'){
    dst[i] = src[i];
    i++;
  }
  dst[i] = '\0';
  return (dst);
}
