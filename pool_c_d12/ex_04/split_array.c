#include <stdlib.h>
#include <stdio.h>

void	print_array(int *arr, int size)
{
  int i;

  i = 0;
  while(i < size){
    if(i == size - 1){
      printf("%d", arr[i]);
    }
    else
    printf("%d - ", arr[i]);
    i++;
  }
}

int	**split_array(int *array, int size)
{
  int **tab;
  
  tab = malloc(sizeof(int*) * 2);
  tab[0] = malloc(sizeof(int) * 3);
  tab[1] = malloc(sizeof(int) * 3);

  int i;
  int j;
  int z;
  
  i = 0;
  j = 0;
  z = 0;
  while(i < size){
    if(array[i] % 2 == 0){
      tab[0][j] = array[i];
      j++;
    }
    else{
      tab[1][z] = array[i];
      z++;
    }
    i++;
  }
  return (tab);
}

int	main()
{
  int tab[] = {1, 2, 3, 4, 5, 6};
  int **result;
  
  result = split_array(tab, 6);
  print_array(result[0], 3);
  printf("\n");
  print_array(result[1], 3);
  printf("\n");
  return (0);
}
