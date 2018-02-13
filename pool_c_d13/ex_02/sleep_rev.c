#include <unistd.h>

void    my_putchar(char c)
{
  write(1, &c, 1);
}

int my_strlen(char *str)
{
  int count;

  count = 0;
  while(str[count] != '\0'){
    count++;
  }
  return (count);
}

void	my_chorstr(char *str)
{
  int len;
  
  len = my_strlen(str) - 1;
  while(len >= 0){
    my_putchar(str[len]);
    sleep(1);
    len--;
  }  
}

int     main(int argc, char **argv)
{
  if(argc == 2){
    my_chorstr(argv[1]);
  }
  my_putchar('\n');
  return (0);
}
