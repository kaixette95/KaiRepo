CREATE TABLE quotes
(
author		varchar(700),
quotes		varchar(700),
category	varchar(700),
image		varbinary(8000),


PRIMARY KEY (quotes)
);

INSERT INTO quotes (author, quotes, category, image)
VALUES ('Albert Einstein', '“There are only two ways to live your life. One is as though nothing is a miracle. The other is as though everything is a miracle.”', 'Life', );

INSERT INTO quotes (author, quotes, category)
VALUES ('Albert Eisnstein', '“Life is like riding a bicycle. To keep your balance, you must keep moving.” ', 'Life');
