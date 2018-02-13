select floor as Floor_number,sum(seats) as Total_number_of_seats,sum(room_number) as Total_number_of_rooms from rooms group by floor order by seats asc;
