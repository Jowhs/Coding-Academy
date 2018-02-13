select name as Name_of_the_most_expensive_subscription,price as Price from subscriptions where price = (select max(price) from subscriptions);
