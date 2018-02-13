select title as "Title of the longest movie", min_duration from movies where min_duration = (select max(min_duration) from movies);
