CREATE TRIGGER PasswordChange ON Users AFTER UPDATE AS
IF UPDATE([password])
BEGIN
    BEGIN TRANSACTION
    DECLARE @userID INT
    DECLARE @oldPassword VARBINARY(256)

    SELECT @userID = userID, @oldPassword = [password] FROM deleted
    INSERT INTO Passwords (userID, previousPassword, DateChanged) VALUES (@userID, @oldPassword, GETDATE())
    COMMIT
END