#include <stdio.h>
#include <stdlib.h>

int	main(int argc, char **argv)
{
  if(argc == 1){
    printf("Error.\n");
  }
  else{
  
    int count;

    count = atoi(argv[1]);
    if(count <= 0){
      printf("Error.\n");
    }
    while(count > 0){
      printf("Hello\n");
      count--;
    }
  return (0);
  }
}
