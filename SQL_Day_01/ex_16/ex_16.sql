select month(sub_date) as "month of birth" from member where id between 42 and 84;

select id, date_format(sub_date, '%M') from member where id between 42 and 84;

