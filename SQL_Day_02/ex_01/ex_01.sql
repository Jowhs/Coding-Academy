select count(id) as Number_of_members , round(avg(round(datediff(CURRENT_DATE, birthdate)/365, 0))) as Average_age from profiles;
