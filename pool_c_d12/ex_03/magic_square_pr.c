#include <stdio.h>

int	horizontal(int *h)
{
  int resh1;
  int resh2;
  int resh3;
  
  resh1 = h[0] + h[1] + h[2];
  resh2 = h[3] + h[4] + h[5];
  resh3 = h[6] + h[7] + h[8];

  if(resh1 == resh2 && resh2 == resh3){
    return (0);
  }
  else{
    return (1);
  }
}

int	vertical(int *v)
{
  int resv1;
  int resv2;
  int resv3;
  
  resv1 = v[0] + v[3] + v[6];
  resv2 = v[1] + v[4] + v[7];
  resv3 = v[2] + v[5] + v[8];
  
  if(resv1 == resv2 && resv2 == resv3){
    return (0);
  }
  else{
  return (1);
  }
}

int	diagonal(int *d)
{
  int resd1;
  int resd2;

  resd1 = d[0] + d[4] + d[8];
  resd2 = d[2] + d[4] + d[6];

  if(resd1 == resd2){
    return (0);
  }
  else{
    return (1);
  }
}

int	magic_square(int *sqr)
{
  int total;
  
  total = horizontal(sqr);
  total += vertical(sqr);
  total += diagonal(sqr);

  if(total == 0){
    return (0);
  }
  else{
    return (1);
  }  
}

int	main()
{
  int tab[] = {8, 1, 6, 3, 5, 7, 4, 9, 2};

  if(magic_square(tab) == 0){
    printf("%d %d %d\n", tab[0], tab[1], tab[2]);
    printf("%d %d %d\n", tab[3], tab[4], tab[5]);
    printf("%d %d %d\n", tab[6], tab[7], tab[8]);
  }
  return (0);  
}
