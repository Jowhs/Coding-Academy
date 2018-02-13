#include <stdio.h>
#include <stdlib.h>

void	print_array(int *array, int size)
{
  int a;

  a = 0;
  while(a < size){
    printf("%d ", array[a]);
    a++;
  }
 
}
int	*merge_array(int *arr1, int *arr2, int size1, int size2)
{
  int *tab3;
  int i;
  int j;

  i = 0;
  j = 0;
  tab3 = malloc(sizeof(int) * (size1 + size2));
  while(i < size1){
    tab3[i] = arr1[i];
    i++;
  }
  while(j < size2){
    tab3[i] = arr2[j];
    j++;
    i++;
  }
  return (tab3);
}

int	main()
{
  int tab1[] = {21, 12, 3};
  int tab2[] = {40, 35, 6, 17, 8};

  print_array(merge_array(tab1, tab2, 3, 5), 8);
  printf("\n");
  free(tab3);
  return (0);
}
