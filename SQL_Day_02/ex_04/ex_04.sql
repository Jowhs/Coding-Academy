select id, left(summary,92) as Summaries from movies where mod(id,2)!=0 and id between 42 and 84;
