#include <unistd.h>
#include <stdio.h>

void	my_putchar(char c)
{
  write(1, &c, 1);
}

void	 my_putstr(char *str)
{
  int i;

  i = 0;
  while(str[i] != '\0'){
    my_putchar(str[i]);
    sleep(1);
    i++;
  }
}

int	main(int argc, char **argv)
{
  if(argc == 2){
    my_putstr(argv[1]);
  }
  my_putchar('\n');
  return (0);
}
