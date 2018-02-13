#include <stdio.h>
#include <stddef.h>

int	main(int argc, char **argv)
{
  if(argc == 1){
    printf("\n");
  }
  else{
    int i;
    
    i = 1;
    while(argc > i){//también podríamos usar while(argv[i] != NULL)
      printf("%s\n", argv[i]);
      i++;
    }
  }
  return (0);
}
