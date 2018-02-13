#include "struct.h"

void	my_init(t_my_struct *p)
{
  if (p == NULL)
    return ;
  p->id = 0;
  p->str = 'NULL';
}
