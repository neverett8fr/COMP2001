CREATE VIEW LoginCount AS 
    SELECT COUNT(Sessions.userID) AS loginCount, Users.email FROM [Sessions], Users WHERE Sessions.userID = Users.userID
    GROUP BY Users.email
