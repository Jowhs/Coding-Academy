#include "struct.h"
#include "abs.h"
#include <stdio.h>
#include <string.h>
#include <stdlib.h>

void	my_init(t_my_struct *p, int x, const char *c)
{
  if (p == NULL)
    return ;
  p->id = MY_ABS(x);
  p->str = strdup(c); 
}
