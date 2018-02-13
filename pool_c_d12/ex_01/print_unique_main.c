#include <stdio.h>

void	print_unique(int *tab, int size)
{
  int x;
  int i;
  int j;
  int n;
  int count;

  i = 0;
  count = 0;
  while(i < size){
    x = tab[i];
    j = 0;
    n = 0;
    while(j < size){
      if(tab[j] == x){
	n++;
      }
      j++;
    }
    if(n == 1){
      if(count > 0){
	printf(",");
      }
      printf("%d", x);
      count++;
    }
    i++;
  }
}

int	main()
{
  int tab[] = {0, 0, 2, 3, 4, 3, 6, 1};

  print_unique(tab, 8);
  printf("\n");
  return (0);
}
