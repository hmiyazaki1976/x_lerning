DROP PROCEDURE proc_userentry;
DELIMITER //
create procedure proc_userentry(
  in email varchar(100),
  in name varchar(200),
  in fastname varchar(100),
  in lastname varchar(100),
  in postcode1 varchar(5),
  in post1 varchar(200),
  in postcode2 varchar(5),
  in post2 varchar(200),
  in password varchar(100),
  out retcode varchar(1),
  out retmessage varchar(200))
begin
  DECLARE newxid  varchar(5);

  set retcode = '0';
  set retmessage = '';

  select max(xid) into newxid from m001_user;
  set newxid = LPAD(newxid + 1, 5, '0');
  INSERT INTO m001_user (xid, uid, email, name, fastname,
   lastname, postcode1, post1, postcode2, post2, password)
   VALUES (newxid, email, email, name, fastname,
     lastname, postcode1, post1, postcode2, post2, password);

end;
//
DELIMITER ;

call proc_userentry('me2','me2','m2','e2','','','','','a2',@code,@str);
