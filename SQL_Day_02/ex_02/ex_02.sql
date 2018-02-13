select zipcode as Zip_codes from profiles group by zipcode having count(*) > 1 order by zipcode asc;

