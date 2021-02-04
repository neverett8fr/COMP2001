CREATE TABLE "Users" (
	"userID" INT NOT NULL IDENTITY(1,1),
	"firstName" VARCHAR(250),
	"lastName" VARCHAR(250),
	"email" VARCHAR(250) NOT NULL,
	"password" VARBINARY(256) NOT NULL,
	CONSTRAINT "pk_userID" PRIMARY KEY ("userID")
);

GO

CREATE TABLE "Passwords" (
    "passwordID" INT NOT NULL IDENTITY(1,1),
    "DateChanged" DATETIME,
    "previousPassword" VARBINARY(256) NOT NULL, 
    "userID" INT NOT NULL,
    CONSTRAINT "pk_passwordID" PRIMARY KEY ("passwordID"),
    CONSTRAINT "fk_passwords_userID" FOREIGN KEY ("userID") REFERENCES "Users"("userID") ON UPDATE CASCADE ON DELETE CASCADE 
); 
GO

CREATE TABLE "Sessions" (
    "sessionID" INT NOT NULL IDENTITY(1,1),
    "sessionDateTime" DATETIME NOT NULL,
    "userID" INT NOT NULL,
    CONSTRAINT "pk_sessionID" PRIMARY KEY ("sessionID"),
    CONSTRAINT "fk_sessions_userID" FOREIGN KEY ("userID") REFERENCES "Users"("userID") ON UPDATE CASCADE ON DELETE CASCADE
);