select title as `Movie_title`, datediff(CURRENT_DATE, release_date) as `Number_of_days_passed` from movies;
