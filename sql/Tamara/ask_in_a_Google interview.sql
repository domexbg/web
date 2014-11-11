SELECT distinct user.Name, user.phone_num, userhistory.date from user 
inner join userhistory on user.user_id =  userhistory.user_id 
where date_sub(now(), INTERVAL 30 day)<userhistory.date;




SELECT * From user WHERE user_id NOT IN 
(SELECT user_id FROM userhistory 
where action='logged_on');
